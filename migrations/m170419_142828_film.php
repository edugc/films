<?php

use yii\db\Migration;

class m170419_142828_film extends Migration
{
    public function up()
    {
        $this->createTable('film', [
            'id' => $this->primaryKey(),
            'title' => $this->string(50)->notNull(),
            'summary' => $this->string(500),
            'year' => $this->integer(4),
            'country' => $this->string(50),
            'type' => $this->string(20),
            'poster' => $this->string(100)
        ]);

    }

    public function down()
    {
        $this->dropTable('film');

        return true;
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
