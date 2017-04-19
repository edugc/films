<?php
/**
 * Created by PhpStorm.
 * User: eduardo
 * Date: 4/04/17
 * Time: 16:56
 */
namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
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

?>