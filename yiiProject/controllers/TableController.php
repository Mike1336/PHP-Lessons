<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Car;
use app\models\Provider;

class TableController extends Controller
{
    public function actionCars()
    {
        $this->layout = '@app/themes/forCarTable/myLayout';

        $cars = Car::find()->asArray()->all();

        return $this->render('car', compact('cars'));
    }
}

