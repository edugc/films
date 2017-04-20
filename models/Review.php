<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "review".
 *
 * @property string $title
 * @property string $body
 * @property integer $id_film
 * @property integer $id_user
 *
 * @property User $idUser
 * @property Film $idFilm
 */
class Review extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'review';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'body'], 'required'],
            [['id_film', 'id_user'], 'integer'],
            [['title'], 'string', 'max' => 50],
            [['body'], 'string', 'max' => 500],
            [['id_film', 'id_user'], 'unique', 'targetAttribute' => ['id_film', 'id_user'], 'message' => 'The combination of Id Film and Id User has already been taken.'],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
            [['id_film'], 'exist', 'skipOnError' => true, 'targetClass' => Film::className(), 'targetAttribute' => ['id_film' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'title' => 'Title',
            'body' => 'Body',
            'id_film' => 'Id Film',
            'id_user' => 'Id User',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdFilm()
    {
        return $this->hasOne(Film::className(), ['id' => 'id_film']);
    }
}
