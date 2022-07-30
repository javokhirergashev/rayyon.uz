<?php

use yii\db\Migration;

/**
 * Class m220723_113529_init_rbac
 */
class m220723_113529_init_rbac extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $auth = Yii::$app->authManager;
        // add " User Index" permission
//        $createPost = $auth->createPermission('createPost');
        $userindex = $auth->createPermission('user/index');
        $userindex->description = 'Index Users';
        $auth->add($userindex);

        // add " Update User status" permission

        $updateUserStatus = $auth->createPermission('user/update');
        $updateUserStatus->description = 'Update Users';
        $auth->add($updateUserStatus);


        // add "author" role and give this role the "createPost" permission
        $author = $auth->createRole('admin');
        $auth->add($author);
        $auth->addChild($author, $userindex);

        // add "admin" role and give this role the "updatePost" permission
        // as well as the permissions of the "author" role
        $admin = $auth->createRole('demo');
        $auth->add($admin);
        $auth->addChild($admin, $updateUserStatus);
        $auth->addChild($admin, $author);

        // Assign roles to users. 1 and 2 are IDs returned by IdentityInterface::getId()
        // usually implemented in your User model.
        $auth->assign($author, 2);
        $auth->assign($admin, 3);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220723_113529_init_rbac cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220723_113529_init_rbac cannot be reverted.\n";

        return false;
    }
    */
}
