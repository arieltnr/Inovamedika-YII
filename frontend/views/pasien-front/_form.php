<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PasienFront */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pasien-front-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nik')->textInput() ?>

    <?= $form->field($model, 'nama_psn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gender_psn')->dropDownList([ 'Pria' => 'Pria', 'Wanita' => 'Wanita', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'alamat_psn')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'usia')->textInput() ?>

    <?= $form->field($model, 'no_hp')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
