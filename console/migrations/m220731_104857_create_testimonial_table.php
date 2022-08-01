<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%testimonial}}`.
 */
class m220731_104857_create_testimonial_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('testimonial', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'email' => $this->string(255)->notNull(),
            'comment' => $this->text()->notNull(),
            'images' => $this->string(255)->notNull(),
            'status' => $this->tinyInteger()->defaultValue(1)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('testimonial');
    }
}
