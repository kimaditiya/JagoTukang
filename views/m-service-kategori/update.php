<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MServiceKategori */

$this->title = 'Update Mservice Kategori: ' . $model->serviceKategoriId;
$this->params['breadcrumbs'][] = ['label' => 'Mservice Kategoris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->serviceKategoriId, 'url' => ['view', 'id' => $model->serviceKategoriId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mservice-kategori-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'data_service'=>$data_service,
        'data_status' =>$data_status
    ]) ?>

</div>
