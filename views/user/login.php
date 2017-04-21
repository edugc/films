<?php
/**
 * Created by PhpStorm.
 * User: laura
 * Date: 21/04/17
 * Time: 8:15
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model app\models\User */

$this->title = 'Inicia sesión';
?>

<div class="container-fluid"/>
<div class="row">
    <div class="col-md-4">
        <h1><?= Html::encode($this->title) ?></h1>
        <p>Introduce tus datos para iniciar sesión:</p>

        <?php $form = ActiveForm::begin(); ?>
            <?= $form->field($model,'nick')->label('Nombre de usuario'); ?>
            <?= $form->field($model, 'password')->passwordInput()->label('Contraseña'); ?>
            <?= Html::submitButton('Inicio',['class' => 'btn btn-basic']) ?>
        <?php ActiveForm::end(); ?>
    </div>
    <div class="col-md-4 col-md-offset-4">
        <?php $this->title = 'Regístrate'; ?>
        <h1><?= Html::encode($this->title) ?></h1>
        <p>O rellena los siguientes campos para registrar un nuevo usuario:</p>

        <?php $form = ActiveForm::begin(); ?>
        <?= $form->field($model, 'nick')->label('Nombre de usuario') ?>
        <?= $form->field($model, 'password')->passwordInput()->label('Contraseña') ?>
        <?= $form->field($model, 'gender')->radioList(['1'=>'M','2'=>'H'])->label('Género'); ?>
        <?= Html::submitButton('Registro', ['class' => 'btn btn-default']) ?>
        <?php ActiveForm::end(); ?>
    </div>
</div>
</div>
