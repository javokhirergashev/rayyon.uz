<?php

use yii\db\Migration;

/**
 * Handles dropping columns from table `{{%faq}}`.
 */
class m220730_125012_drop_client_name_column_from_faq_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('faq', 'client_name');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addColumn('faq', 'client_name', $this->string(255));
    }
}
