<?php
/**
 * Created by PhpStorm.
 * User: laura
 * Date: 4/04/17
 * Time: 16:59
 */

use yii\helpers\Html;

$this->title = 'Formulario (Datos enviados)';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1>Datos del usuario</h1>

<h4 class="alert alert-success">Los siguientes datos de usuario se enviaron correctamente</h4>

<ul>
    <li><label>Nombre</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>
