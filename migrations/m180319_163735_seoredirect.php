<?php

use yii\db\Migration;

/**
 * Class m180319_163735_seoredirect
 */
class m180319_163735_seoredirect extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('redirect_tools', [
            'id' => $this->primaryKey()->notNull(),
            'from' => $this->text()->notNull(),
            'to' => $this->text()->notNull(),
            'code' => $this->integer()
        ]);
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180319_163735_seoredirect cannot be reverted.\n";
        $this->delete('redirect_tools');
        return true;
    }
}
