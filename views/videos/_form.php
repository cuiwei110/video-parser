<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Videos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="videos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'videoURL')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    Supported:
    <?php foreach ($resources as $resource) : ?>
        <br><b><?= $resource->name ?></b><br>
        Example url - <?= $resource->example_url ?><br>
    <?php endforeach; ?>

    <?php ActiveForm::end(); ?>

</div>
