<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Login';

?>
<p class="tab"></p>
<div class="site-login">
    <h1 style="color:white;text-align:center;"><?= Html::encode($this->title) ?></h1>

    <p style="color:white;text-align:center;">Please fill out the following fields to login:</p>

<div class="log">
    <div class="row">
        <div class="col-lg-5" style="margin-left:30%;">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div style="color:white;margin:1em 0">
                    If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                    <br>
                    Need new verification email? <?= Html::a('Resend', ['site/resend-verification-email']) ?>
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'glow-button3', 'name' => 'login-button']) ?>
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
.log{
    
    border-radius: 15px;
    color: white;
    margin-right: 13%;
    margin-left: 13%;
    margin-bottom: 50px;
    padding: 10px;
} 



.glow-button3 {
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
.glow-button3:hover {
  box-shadow: 0 0 1em 0.2em #6e8ef5;
  opacity: .90;
  color: white;
  
}

</style>