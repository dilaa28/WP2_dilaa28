<?php

namespace app\controllers;
use yii\data\Pagination;
use app\models\Mahasiswa;

class MahasiswaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        // return $this->render('index');

        $query = Mahasiswa::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $countries = $query->orderBy('nama')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'countries' => $countries,
            'pagination' => $pagination,
        ]);
    }

    public function actionProfil()
    {
        return $this->render('profil');
    }

}
