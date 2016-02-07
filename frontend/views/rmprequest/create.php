<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\TmpRequest */

$this->title = Yii::t('app', 'Create Request');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tmp Requests'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tmp-request-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
