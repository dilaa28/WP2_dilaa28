<?php
use yii\grid\GridView;

$this->title = 'Obat';
$this->params['breadcrumbs'][]= $this->title;
?>
<h1><?= $this->title ?></h1>
<?=
GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        ['class'=>'yii\grid\SerialColumn'],
    'kode_obat',
    'harga',
    'stok_obat',
    ],
]);
?>