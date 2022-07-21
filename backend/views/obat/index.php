<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Obat';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="obat-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Data', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_obt',
            'nama_obt',
            'jenis_obt',
            'harga',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, backend\models\Obat $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_obt' => $model->id_obt]);
                 }
            ],
        ],
    ]); ?>


</div>
