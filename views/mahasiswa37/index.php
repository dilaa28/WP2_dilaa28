<?php
use yii\grid\Gridview;
use yii\grid\SerialColumn;
use yii\grid\ActionColumn;
use yii\helpers\Html;
?>

<p>
        <?= Html::a('Mahasiswa Baru', ['create'], ['class' => 'btn btn-primary']) ?>
</p>

<?=

GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        ['class'=>SerialColumn::className()],
    'id037',
    'nim037',
    'nama037',
    'kelas037',
    'status037',
    [
        'class'=> ActionColumn::className(),
        'template'=> '{view} {update} {delete}',
    
    ],
],
]);
?>