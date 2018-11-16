<?php

use common\models\Categories;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\Models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'category')->dropDownList(ArrayHelper::map(Categories::find()->all(), 'id', 'name'), ['prompt'=>'Select Category'] ) ?>

    <?= $form->field($model, 'product_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->fileInput()->label("Featured Image") ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'price')->textInput(['type'=>'number']) ?>

    <?= $form->field($model, 'quantity')->textInput(['type'=>'number']) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'onload_date')->textInput(['type'=>'date']) ?>

    <?= $form->field($model, 'offload_date')->textInput(['type'=>'date']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
