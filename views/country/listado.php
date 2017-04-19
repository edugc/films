<?php
/**
 * Created by PhpStorm.
 * User: laura
 * Date: 5/04/17
 * Time: 9:36
 */

use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = 'Listado de países';
$this->params['breadcrumbs'][] = $this->title;
?>

<div>
    <h1><?= Html::encode($this->title) ?></h1>

    <table class="table">
        <tr><th>País</th><th>Código</th><th>Población</th></tr>
        <?php foreach ($countries as $country): ?>
            <tr>
                <td><?= $country->name?></td>
                <td><?= $country->code ?></td>
                <td><?= $country->population ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <?= LinkPager::widget(['pagination' => $pagination]) ?>

</div>

