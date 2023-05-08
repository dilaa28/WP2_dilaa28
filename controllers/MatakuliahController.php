<?php

namespace app\controllers;

class MatakuliahController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionTambahBaru()
    {
        return $this->render('tambahbaru');
    }

}
