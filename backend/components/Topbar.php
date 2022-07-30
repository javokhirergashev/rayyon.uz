<?php

namespace backend\components;

use common\models\User;
use yii\bootstrap4\Widget;

class Topbar extends Widget
{
    public function run()
    {
        $currentUser = User::findOne(\Yii::$app->user->getId());
        return$this->render('topbar', compact('currentUser'));
    }
}