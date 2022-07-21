<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\PasienFront */

$this->title = $model->id_psn;
$this->params['breadcrumbs'][] = ['label' => 'Pasien Fronts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pasien-front-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_psn' => $model->id_psn], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_psn' => $model->id_psn], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_psn',
            'nik',
            'nama_psn',
            'gender_psn',
            'alamat_psn:ntext',
            'usia',
            'no_hp',
        ],
    ]) ?>

</div>
