<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin() ?>


<?= $form->field($mahasiswa37, 'nimo37') ?>
<?= $form->field($mahasiswa37, 'nama037') ?>
<?= $form->field($mahasiswa37, 'kelas037') ?>
<?= $form->field($mahasiswa37, 'status037') ?>

<?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>

<?php ActiveForm::end() ?>