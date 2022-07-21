<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Obat */

$this->title = 'Update Obat: ' . $model->id_obt;
$this->params['breadcrumbs'][] = ['label' => 'Obats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_obt, 'url' => ['view', 'id_obt' => $model->id_obt]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="obat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
