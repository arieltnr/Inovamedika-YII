<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PasienSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Pasien';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pasien-index">

    <h1></h1>



    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_psn',
            'nik',
            'nama_psn',
            'gender_psn',
            'alamat_psn:ntext',
            //'usia',
            //'no_hp',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, backend\models\Pasien $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_psn' => $model->id_psn]);
                 }
            ],
        ],
    ]); ?>


</div>
