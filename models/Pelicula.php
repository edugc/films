<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "peliculas".
 *
 * @property string $titulo
 * @property string $sinopsis
 * @property integer $anio
 * @property string $nacionalidad
 * @property string $genero
 * @property string $cartel
 */
class Pelicula extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'peliculas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['titulo', 'sinopsis', 'anio', 'nacionalidad', 'genero'], 'required'],
            [['anio'], 'integer'],
            [['titulo', 'nacionalidad'], 'string', 'max' => 50],
            [['sinopsis'], 'string', 'max' => 500],
            [['genero'], 'string', 'max' => 20],
            [['cartel'], 'string', 'max' => 100],
            [['titulo'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'titulo' => 'Titulo',
            'sinopsis' => 'Sinopsis',
            'anio' => 'Anio',
            'nacionalidad' => 'Nacionalidad',
            'genero' => 'Genero',
            'cartel' => 'Cartel',
        ];
    }

}
