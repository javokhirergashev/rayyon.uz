<?php

use yii\db\Migration;

/**
 * Handles dropping columns from table `{{%faq}}`.
 */
class m220730_113827_drop_images_column_from_faq_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('faq', 'images');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addColumn('faq', 'images', $this->string(255));
    }
}
