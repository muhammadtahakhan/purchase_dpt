<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Request */
/* @var $form yii\widgets\ActiveForm */
?>
<hr>
<h1><?= Html::encode($this->title) ?></h1>
<div class="request-form">

    <?php $form = ActiveForm::begin(); ?>

   
    
    <div class="form-group">
								<label for="field-1" class="col-sm-3 control-label">Field 1</label>
								
								<div class="col-sm-5">
									<input type="text" class="form-control" id="field-1" placeholder="Placeholder">
								</div>
							</div>

   
    
    <div class="form-group">
								<label class="col-sm-3 control-label">Date Picker (popup)</label>
								
								<div class="col-sm-3">
									<div class="input-group">
										<input type="text" class="form-control datepicker" data-format="D, dd MM yyyy">
										
										<div class="input-group-addon">
											<a href="#"><i class="entypo-calendar"></i></a>
										</div>
									</div>
								</div>
							</div>
     <?= $form->field($model, 'date')->textInput() ?>
    <?= $form->field($model, 'nature')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
