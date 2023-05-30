<?php
namespace app\controllers;
use app\models\Mahasiswa37;
use yii\data\ActiveDataProvider;
use Yii;


class Mahasiswa37Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mahasiswa37::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionCreate()
    {
        $mahasiswa37 = new Mahasiswa37;
        $mahasiswa37->nim037 = '60200121037-'.rand(10,99);
        $mahasiswa37->nama037 = 'Fadilah Nur Insyani';
        $mahasiswa37->kelas037 = 'A';
        $mahasiswa37->status037 = 'Baru';
        if ($mahasiswa37->save()) {
            Yii::$app->session->setFlash('success', 'Data Tersimpan');
            return $this->redirect(['index']);
        }
    }

    public function actionUpdate($id)
    {
        $mahasiswa37 = Mahasiswa37::findOne($id);
        if($mahasiswa37!== null){
            $mahasiswa37->kelas037 = 'B';
            $mahasiswa37->status037 = 'Update';
            $mahasiswa37->save();
            Yii::$app->session->setFlash('success', 'Data Terupdate');
        }
        return $this->redirect(['index']);
    }

    public function actionDelete($id)
    {
        $mahasiswa37 = Mahasiswa37::findOne($id);
        if ($mahasiswa37->delete()) {
        return $this->redirect(['index']);
        }
        else {
        var_dump($mahasiswa37->getError());
        die();
        }
        
    }

    public function actionView($id)
    {
        $mahasiswa37 = Mahasiswa37::findOne($id);
        return $this->render('view', ['mahasiswa37' => $mahasiswa37]);
    }

}