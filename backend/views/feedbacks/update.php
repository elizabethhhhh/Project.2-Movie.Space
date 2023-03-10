<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Feedbacks */

$this->title = 'Update Feedbacks: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Feedbacks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="feedbacks-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
