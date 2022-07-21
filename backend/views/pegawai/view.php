<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Pegawai */

$this->title = $model->id_krywn;
$this->params['breadcrumbs'][] = ['label' => 'Pegawais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pegawai-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_krywn' => $model->id_krywn], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_krywn' => $model->id_krywn], [
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
            'id_krywn',
            'nip',
            'nama_krywn',
            'gender_krywn',
            'alamat_krywn:ntext',
        ],
    ]) ?>

</div>
