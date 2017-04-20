<?php

use yii\db\Migration;

class m170420_075623_comment extends Migration
{
    public function up()
    {
        $this->createTable('comment', [
            'id' => $this->primaryKey(),
            'id_film' => $this->integer(),
            'id_user' => $this->integer(),
            'title' => $this->string(50),
            'body' => $this->string(500),
            'likes' => $this->integer(),
            'dislikes' => $this->integer()
        ]);

        $this->addForeignKey('fk_film_review','review', 'id_film', 'film', 'id');
        $this->addForeignKey('fk_user_review','review', 'id_user', 'user', 'id');
    }

    public function down()
    {
        $this->dropTable('comment');

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
