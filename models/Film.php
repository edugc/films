<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "film".
 *
 * @property integer $id
 * @property string $title
 * @property string $summary
 * @property integer $year
 * @property string $country
 * @property string $type
 * @property string $poster
 *
 * @property Comment[] $comments
 * @property Review[] $reviews
 * @property User[] $idUsers
 * @property Vote[] $votes
 * @property User[] $idUsers0
 */
class Film extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'film';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'summary', 'year', 'country', 'type'], 'required'],
            [['year'], 'integer'],
            [['title', 'country'], 'string', 'max' => 50],
            [['summary'], 'string', 'max' => 500],
            [['type'], 'string', 'max' => 20],
            [['poster'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'summary' => 'Summary',
            'year' => 'Year',
            'country' => 'Country',
            'type' => 'Type',
            'poster' => 'Poster',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['id_film' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReviews()
    {
        return $this->hasMany(Review::className(), ['id_film' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUsers()
    {
        return $this->hasMany(User::className(), ['id' => 'id_user'])->viaTable('review', ['id_film' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVotes()
    {
        return $this->hasMany(Vote::className(), ['id_film' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUsers0()
    {
        return $this->hasMany(User::className(), ['id' => 'id_user'])->viaTable('vote', ['id_film' => 'id']);
    }
}
