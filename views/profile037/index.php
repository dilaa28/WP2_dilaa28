<?php
use yii\grid\GridView;
?>

<?=
GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
    'Id',
    'Id_mahasiswa',
    'foto_profile',
    ]
])
?>