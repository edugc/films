<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $nick
 * @property string $password
 * @property string $gender
 * @property integer $rol
 *
 * @property Comment[] $comments
 * @property Review[] $reviews
 * @property Film[] $idFilms
 * @property Vote[] $votes
 * @property Film[] $idFilms0
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nick', 'password', 'gender', 'rol'], 'required'],
            [['rol'], 'integer'],
            [['nick'], 'string', 'max' => 50],
            [['password'], 'string', 'max' => 10],
            [['gender'], 'string', 'max' => 1],
            [['nick'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nick' => 'Nick',
            'password' => 'Password',
            'gender' => 'Gender',
            'rol' => 'Rol',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['id_user' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReviews()
    {
        return $this->hasMany(Review::className(), ['id_user' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdFilms()
    {
        return $this->hasMany(Film::className(), ['id' => 'id_film'])->viaTable('review', ['id_user' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVotes()
    {
        return $this->hasMany(Vote::className(), ['id_user' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdFilms0()
    {
        return $this->hasMany(Film::className(), ['id' => 'id_film'])->viaTable('vote', ['id_user' => 'id']);
    }
}
