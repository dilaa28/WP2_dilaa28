<?php

namespace app\controllers;
use yii\data\ActiveDataProvider;
use app\models\Mahasiswa;
use app\models\mata_kuliah;
use app\models\MataKuliah;
use yii\debug\models\timeline\DataProvider;

class MahasiswaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        // return $this->render('index');

        $query = Mahasiswa::find();

        $dataProvider = new ActiveDataProvider(['query'=> $query]);
            return $this->render('index', [
                'dataProvider'=> $dataProvider
        ]);
        
    }

    public function actionProfil()
    {
        return $this->render('profil');
    }

    public function actionMatkul()
    {
        // return $this->render('index');

        $query = MataKuliah::find();

        $dataProvider = new ActiveDataProvider(['query'=> $query]);
            return $this->render('matkul', [
                'dataProvider'=> $dataProvider
        ]);
        
    }

}
