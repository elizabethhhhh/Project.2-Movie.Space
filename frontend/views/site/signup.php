<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \frontend\models\SignupForm $model */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Signup';

?>
<p class="tab"></p>
<div class="site-signup">
    <h1 style="color:white;text-align:center;"><?= Html::encode($this->title) ?></h1>

    <p style="color:white;text-align:center;">Please fill out the following fields to signup:</p>

<div class="sing">
    <div class="row">
        <div class="col-lg-5" style="margin-left:30%;">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'glow-button4', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
</div>


<style>
body{ 
    background: url(./images/smell1.jpg);
    background-size: 100%;

}
.sing{
    border-radius: 15px;
    color: white;
    margin-right: 15%;
    margin-left: 15%;
    margin-bottom: 50px;
    padding: 10px;
} 



.glow-button4 {
  text-decoration: none;
  display: inline-block;
  padding: 6px;
  margin: 1px 100px;
  border-radius: 0.7rem;
  box-shadow: inset 0 0 0.4em 0 #6e8ef5, 0 0 0.5em 0 #6e8ef5;
  color: white;
  border: .2rem solid #557af2;
  width: 100px;
  background-color: #2754e6;
}
.glow-button4:hover {
  box-shadow: 0 0 1em 0.2em #6e8ef5;
  opacity: .90;
  color: white;
  
}

</style>