<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Pendaftaran */

$this->title = 'Update Pendaftaran: ' . $model->id_pdf;
$this->params['breadcrumbs'][] = ['label' => 'Pendaftarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pdf, 'url' => ['view', 'id_pdf' => $model->id_pdf]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pendaftaran-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
