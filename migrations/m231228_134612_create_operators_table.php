<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%operators}}`.
 */
class m231228_134612_create_operators_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('operators', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
        ], 'CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%operators}}');
    }
}
