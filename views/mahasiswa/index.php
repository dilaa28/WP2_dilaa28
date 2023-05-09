<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
/** @var yii\web\View $this */
?>
<h1>mahasiswa</h1>
<ul>
<?php foreach ($countries as $mahasiswa): ?>
    <li>
        <?= Html::encode("{$mahasiswa->nama} ({$mahasiswa->nim})") ?>:
        <?= $mahasiswa->population ?>
    </li>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination'=> $pagination]) ?>
