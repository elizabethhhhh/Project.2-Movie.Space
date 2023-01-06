<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tikanonymous */

$this->title = 'Create Anonym tickets';
$this->params['breadcrumbs'][] = ['label' => 'Anonym tickets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tikanonymous-create">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
