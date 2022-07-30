<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tours}}`.
 */
class m220726_125649_create_tours_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tours', [
            'id' => $this->primaryKey(),'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull(),
            'description' => $this->string(255)->null(),
            'category_id' => $this->tinyInteger()->notNull(),
            'body' => $this->text(),
            'created_date' => $this->dateTime()->notNull(),
            'updated_date' => $this->dateTime()->notNull(),
            'price'=> $this->string(255),
            'images' => $this->string(255)->null(),
            'status' => $this->tinyInteger()->defaultValue(1),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tours');
    }
}
