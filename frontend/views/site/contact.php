<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \frontend\models\ContactForm $model */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;


$this->title = 'Form of ideas and working proposals';
?>
<p class="tab"></p>
<div class="site-contact">
    <h1 style="text-align:center;color:white"><?= Html::encode($this->title) ?></h1>

<div class="cont2">
    <div class="cont"><center>
        <p>
            If you have business inquiries please fill out the following form to contact us.
        </p>
        <p>
            We look forward to working with you. 
        </p>
        <p>
            Thank you.
        </p></center>
    </div>

            
    <p><center>________________________________________________________________________</p></center>

    <div class="cont1">
        <div class="row">
            <div class="col-lg-5" style="margin-left:30%;">
                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'subject') ?>

                    <?= $form->field($model, 'proposal')->textarea(['rows' => 6]) ?>

                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6" style="margin-left:15%;">{input}</div></div>',
                    ]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'glow-button5', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
    </div>
</div>

<style>
    body{ 
        background: url(./images/svet1.png);
        background-size: 100%;
     }
.cont{
    font-size: 20px;
}
.cont1{
    border-radius: 15px;
    margin-right: 15%;
    margin-left: 15%;
    padding: 10px;
}
.cont2{
    color: white;
}
.glow-button5 {
  text-decoration: none;
  display: inline-block;
  padding: 6px;

  border-radius: 0.7rem;
  box-shadow: inset 0 0 0.4em 0 #6e8ef5, 0 0 0.5em 0 #6e8ef5;
  color: white;
  border: .2rem solid #557af2;
  width: 100px;
  background-color: #2754e6;
}
.glow-button5:hover {
  box-shadow: 0 0 1em 0.2em #6e8ef5;
  opacity: .90;
  color: white;
  
}
</style> 