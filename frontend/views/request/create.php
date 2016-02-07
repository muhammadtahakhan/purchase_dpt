<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Request */

$this->title = Yii::t('app', 'Create Request');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Requests'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="request-create">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
