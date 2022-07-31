<?php

use yii\db\Migration;

/**
 * Handles dropping columns from table `{{%faq}}`.
 */
class m220730_125041_drop_client_email_column_from_faq_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('faq', 'client_email');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addColumn('faq', 'client_email', $this->string(255));
    }
}
