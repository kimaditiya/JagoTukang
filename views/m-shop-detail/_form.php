<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\select2\Select2;



/* @var $this yii\web\View */
/* @var $model app\models\MShopDetail */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mshop-detail-form">

     <?php $form = ActiveForm::begin([
        'id'=>$model->formName(),
        'layout' => 'horizontal'
    ]); ?>


    <?= $form->field($model, 'shopDetailJudul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shopDetailDeskripsi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shopDetailGambar')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'shopId')->widget(Select2::classname(), [
        'data' => $data_shop,
        'options' => ['placeholder' => 'Select a ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

      <?php
    if(!$model->isNewRecord){

    ?>

    <?= $form->field($model, 'shopDetailStatus')->widget(Select2::classname(), [
        'data' => $data_status,
        'options' => ['placeholder' => 'Select a ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <?php
        }
    ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
