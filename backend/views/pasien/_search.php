<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PasienSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pasien-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_psn') ?>

    <?= $form->field($model, 'nik') ?>

    <?= $form->field($model, 'nama_psn') ?>

    <?= $form->field($model, 'gender_psn') ?>

    <?= $form->field($model, 'alamat_psn') ?>

    <?php // echo $form->field($model, 'usia') ?>

    <?php // echo $form->field($model, 'no_hp') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
