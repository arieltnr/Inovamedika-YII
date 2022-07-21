<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'List Pasien';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pasien-front-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_psn',
            'nik',
            'nama_psn',
            'gender_psn',
            'alamat_psn:ntext',
            //'usia',
            //'no_hp',
           /* [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, frontend\models\PasienFront $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_psn' => $model->id_psn]);
                 }
            ], */
        ],
    ]); ?>


</div>
