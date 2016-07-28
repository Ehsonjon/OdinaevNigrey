<?php

use yii\db\Schema;
use yii\db\Migration;

class m160728_204651_mydb extends Migration
{
    public function up()
    {
           $tableOptions = null;
        if ($this->db->driverName === 'mysql') {

            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('my', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'content' => Schema::TYPE_TEXT,
        ]);


    }

    public function down()
    {
        echo "m160728_204651_mydb cannot be reverted.\n";

        $this->dropTable('my');

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
