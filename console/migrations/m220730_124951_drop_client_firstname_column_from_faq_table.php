<?php

use yii\db\Migration;

/**
 * Handles dropping columns from table `{{%faq}}`.
 */
class m220730_124951_drop_client_firstname_column_from_faq_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('faq', 'client_firstname');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addColumn('faq', 'client_firstname', $this->string(255));
    }
}
