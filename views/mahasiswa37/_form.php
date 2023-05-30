<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($mahasiswa37, 'nim037') ?>
    <?= $form->field($mahasiswa37, 'nama037') ?>
    <?= $form->field($mahasiswa37, 'kelas037') ?>
    <?= $form->field($mahasiswa37, 'status037') ?>

<?= 
Html::submitButton('save', ['class' => 'btn btn-primary']) 
?>

<?php ActiveForm::end() ?>