<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Tindakan */

$this->title = 'Update Tindakan: ' . $model->id_tdk;
$this->params['breadcrumbs'][] = ['label' => 'Tindakans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_tdk, 'url' => ['view', 'id_tdk' => $model->id_tdk]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tindakan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
