<?php
/**
 * Created by PhpStorm.
 * User: laura
 * Date: 4/04/17
 * Time: 16:50
 */

namespace app\models;

use yii\base\Model;

class EjemploForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];

    }

}