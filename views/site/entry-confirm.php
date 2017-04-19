<?php
/**
 * Created by PhpStorm.
 * User: eduardo
 * Date: 4/04/17
 * Time: 17:11
 */

use yii\helpers\Html;
?>
<p>You have entered the following information:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>