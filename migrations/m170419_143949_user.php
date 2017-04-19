<?php

use yii\db\Migration;

class m170419_143949_user extends Migration
{
    public function up()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'nick' => $this->string(50)->notNull()->unique(),
            'password' => $this->string(10),
            'gender' => $this->char(1)->check('M')->check('H'),
            'rol' => $this->integer(1)->check(0)->check(1)
        ]);
    }

    public function down()
    {
        $this->dropTable('user');

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
