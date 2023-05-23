<?php

namespace app\controllers;
use yii\data\ActiveDataProvider;
use app\models\Profile037;

class Profile037Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        // return $this->render('index');

        $query = Profile037::find();

        $dataProvider = new ActiveDataProvider(['query'=> $query]);
            return $this->render('index', [
                'dataProvider'=> $dataProvider
        ]);
    }

}
