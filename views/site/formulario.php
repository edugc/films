<?php
/**
 * Created by PhpStorm.
 * User: laura
 * Date: 4/04/17
 * Time: 17:08
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Formulario';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= /** @var TYPE_NAME $message */
        Html::encode($message)?>
    </p>


    <?php $form = ActiveForm::begin(); ?>
        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'email') ?>
        <div class="form-group">
            <?= Html::submitButton('Enviar datos', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end();?>

    <code><?= __FILE__ ?></code>
</div>




