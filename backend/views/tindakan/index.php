<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'List Tindakan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tindakan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Data', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_tdk',
            'nama_tdk',
            'biaya',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, backend\models\Tindakan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_tdk' => $model->id_tdk]);
                 }
            ],
        ],
    ]); ?>


</div>
