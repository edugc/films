<?php

namespace app\controllers;

use Doctrine\ORM\EntityManager;

class PeliculaController extends \yii\web\Controller
{
    public function actionIndex()
    {

        return $this->render('index');
    }

}