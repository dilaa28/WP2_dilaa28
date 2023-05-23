<?php

namespace app\controllers;
use yii\data\ActiveDataProvider;
use app\models\Mahasiswa037;

class Mahasiswa037Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        // return $this->render('index');

        $query = Mahasiswa037::find();

        $dataProvider = new ActiveDataProvider(['query'=> $query]);
            return $this->render('index', [
                'dataProvider'=> $dataProvider
        ]);
    }

}
