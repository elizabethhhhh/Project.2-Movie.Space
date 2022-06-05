<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->registerCss($css, ["type" => "text/css"], "site" );
?>
<h1 class="display-4"><font color="white">Application Form</h1></font>
    <p class="tab"></p>

<div class="rw">
<table class="table">
    <tr class="thead-dark">
        <th>Name</th>
        <th>Number</th>
        <th>Date</th>
        <th>Service</th>
    </tr>
<?php foreach ($userfeedbacks as $userfeedback): ?>
    <tr>
    <td><?= $userfeedback->name?></td>
    <td>    <?= $userfeedback->number ?></td>
    <td>   <?= $userfeedback->date ?></td>
    <td>    <?= $userfeedback->service ?></td>
    </tr>
<?php endforeach; ?>
</table>
</div>
<?= LinkPager::widget(['pagination' => $pagination]) ?>


<style type="text/css">
    .rw{
        color: white;
        font-size: 13pt;
    }
    
</style>

<style>
    body{ 
        background: url(../images/fon3.png);
        background-size: 100%;
     }
</style> 
<body>