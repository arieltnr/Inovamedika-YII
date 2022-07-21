<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PegawaiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Pegawai';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pegawai-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Data', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_krywn',
            'nip',
            'nama_krywn',
            'gender_krywn',
            'alamat_krywn:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, backend\models\Pegawai $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_krywn' => $model->id_krywn]);
                 }
            ],
        ],
    ]); ?>


</div>
