<?php

use yii\db\Migration;

class m170419_151341_vote extends Migration
{
    public function up()
    {
        $this->createTable('vote', [
            'id_film' => $this->integer(),
            'id_user' => $this->integer(),
            'mark' => $this->decimal(1)
        ]);

        $this->addPrimaryKey('pk_filmuser_vote','vote', ['id_film', 'id_user']);
        $this->addForeignKey('fk_film_vote','vote', 'id_film', 'film', 'id');
        $this->addForeignKey('fk_user_vote','vote', 'id_user', 'user', 'id');

    }

    public function down()
    {
        $this->dropTable('vote');

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
