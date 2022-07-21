<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\PasienFront */

$this->title = 'Create Pasien Front';
$this->params['breadcrumbs'][] = ['label' => 'Pasien Fronts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pasien-front-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
