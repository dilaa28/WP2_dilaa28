<?php

namespace app\controllers;

use app\models\Obat;
use yii\data\ActiveDataProvider;

class ObatController extends \yii\web\Controller
{

    public function actionIndex()
    {
        $dataProvider= new ActiveDataProvider([
            'query' => Obat::find(),
        ]);


        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

}