<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Resources */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resources-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_selector')->textInput([
        'maxlength' => true,
        'placeholder' => 'CSS selectors'
    ]) ?>

    <?= $form->field($model, 'description_selector')->textInput([
        'maxlength' => true,
        'placeholder' => 'CSS selectors'
    ]) ?>

    <?= $form->field($model, 'embedded_url')->textInput([
        'maxlength' => true,
        'placeholder' => 'Url for embedded Example: https://rutube.ru/play/embed/'
    ]) ?>

    <?= $form->field($model, 'example_url')->textInput([
        'maxlength' => true,
        'placeholder' => 'Url of same video'
    ]) ?>

    <?= $form->field($model, 'image_selector')->textInput([
        'maxlength' => true,
        'placeholder' => 'Only meta tags content, Example: meta[property="og:image"]'
    ]) ?>

    <?= $form->field($model, 'id_parameter')->textInput([
        'maxlength' => true,
        'placeholder' => 'Get parameter or null'
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
