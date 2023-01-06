<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Feedbacks */

$this->title = 'Create Feedbacks';
$this->params['breadcrumbs'][] = ['label' => 'Feedbacks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="feedbacks-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
