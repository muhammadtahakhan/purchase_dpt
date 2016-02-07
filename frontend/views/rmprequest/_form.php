<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\TmpRequest */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tmp-request-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'originator_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nature_job')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
