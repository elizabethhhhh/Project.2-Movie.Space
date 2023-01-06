<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \frontend\models\ContactForm $model */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;


$this->title = 'Contact';
?>
<p class="tab"></p>
<div class="site-contact">
    <h1 style="text-align:center;color:white"><?= Html::encode($this->title) ?></h1>

<div class="cont2">
    <div class="cont"><center>
        <p>
            If you have business inquiries or other questions, please fill out the following form to contact us.
        </p>
        <p>
            We'd love to hear from you. All comments go to Movie Space owners and theater management. <br>They know exactly how to solve the problem and make your favorite movie theater even better.
        </p>
        <p>
            Thank you.
        </p></center>
    </div>

            <div class="cont"><center><p>Write to us on messenger: &nbsp &nbsp &nbsp
                <a href="https://web.telegram.org/k/">
                    <img src="images/airplane.png" width="50" height="50">
                </a>&nbsp
                <a href="https://www.viber.com/ru/">
                    <img src="images/viber.png" width="50" height="50">
                </a>&nbsp
                <a href="https://www.messenger.com/?locale=ru_RU">
                    <img src="images/messenger.png" width="50" height="50">
                </a> 
            </p></div>
            
    <p><center>________________________________________________________________________</center></p>
            <div class="cont"><center><p>Or to e-mail: &nbsp &nbsp &nbsp
                <img src="images/email1.png" width="50" height="50">&nbsp movie.space@gmail.com</p></div>
                
    <p><center>________________________________________________________________________</center></p>

             <div class="cont"><center><p>Schedule of the call center: <br> Mon-Fri - 9:00 to 21:00 <br> Fri-Nd - 9:00 to 22:00 </p></div>
    <p><center>________________________________________________________________________</p></center>



    <div class="cont1">
        <div class="row">
            <div class="col-lg-5" style="margin-left:30%;">
                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'subject') ?>

                    <?= $form->field($model, 'feedback')->textarea(['rows' => 6]) ?>

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