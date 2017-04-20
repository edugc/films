<?php

use yii\db\Migration;

class m170420_075345_review extends Migration
{
    public function up()
        //coimmmejnrfe
    {
        $this->createTable('review', [
            'id_film' => $this->integer(),
            'id_user' => $this->integer(),
            'title' => $this->string(50),
            'body' => $this->string(500)
        ]);

        $this->addPrimaryKey('pk_filmuser_review','review', ['id_film', 'id_user']);
        $this->addForeignKey('fk_film_review','review', 'id_film', 'film', 'id');
        $this->addForeignKey('fk_user_review','review', 'id_user', 'user', 'id');
    }

    public function down()
    {
        $this->dropTable('review');

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