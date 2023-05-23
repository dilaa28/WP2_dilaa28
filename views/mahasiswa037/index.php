<?php

use app\models\Mahasiswa037;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa037-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Mahasiswa Baru', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id',
            'Nim',
            'Nama',
            'Kelas',
            // 'Jurusan', 
            // 'Id_mahasiswa',
            'profile037.foto_profile',

            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Mahasiswa037 $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Id' => $model->Id]);
                }
            ],
        ],
    ]); ?>
</div>