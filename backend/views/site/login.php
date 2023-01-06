<?php
use yii\helpers\Html;
?>
<body>
<div class="pd">
<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <?php $form = \yii\bootstrap4\ActiveForm::begin(['id' => 'login-form']) ?>

        <?= $form->field($model,'username', [
            'options' => ['class' => 'form-group has-feedback'],
            'inputTemplate' => '{input}<div class="input-group-append"><div class="input-group-text">🙂<span class="fas fa-envelope"></span></div></div>',
            'template' => '{beginWrapper}{input}{error}{endWrapper}',
            'wrapperOptions' => ['class' => 'input-group mb-3']
        ])
            ->label(false)
            ->textInput(['placeholder' => $model->getAttributeLabel('username')]) ?>

        <?= $form->field($model, 'password', [
            'options' => ['class' => 'form-group has-feedback'],
            'inputTemplate' => '{input}<div class="input-group-append"><div class="input-group-text">🔒<span class="fas fa-lock"></span></div></div>',
            'template' => '{beginWrapper}{input}{error}{endWrapper}',
            'wrapperOptions' => ['class' => 'input-group mb-3']
        ])
            ->label(false)
            ->passwordInput(['placeholder' => $model->getAttributeLabel('password')]) ?>

        <div class="row">
            <div class="col-8">
                <?= $form->field($model, 'rememberMe')->checkbox() ?>
            </div>
            <div class="col-4">
                <?= Html::submitButton('Sign In', ['class' => 'btn btn-primary btn-block']) ?>
            </div>
        </div>

        <?php \yii\bootstrap4\ActiveForm::end(); ?>

        <div class="social-auth-links text-center mb-3">
            <p>- OR -</p>
            <a href="#" class="glow-button7">
                <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
            </a>
            <a href="#" class="glow-button8">
                <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
            </a>
        </div>
        <!-- /.social-auth-links -->

       
    </div>
    <!-- /.login-card-body -->
</div>
</div>
</body>
<style>
    .pd{
        margin-right: 30%;
        margin-left: 30%;
    }
    body{
        background-color: #adadad;
    }
.glow-button7 {
  text-decoration: none;
  display: inline-block;
  padding: 6px;
  margin: 1px 5px;
  border-radius: 0.3rem;
  box-shadow: inset 0 0 0.4em 0 #6e8ef5, 0 0 0.5em 0 #6e8ef5;
  color: black;
  border: .2rem solid #557af2;
  width: 390px;
}
.glow-button7:hover {
  box-shadow: 0 0 1em 0.2em #6e8ef5;
  opacity: .90;
  color: black;
  text-decoration: none;
}
.glow-button8 {
  text-decoration: none;
  display: inline-block;
  padding: 6px;
  margin: 1px 5px;
  border-radius: 0.3rem;
  box-shadow: inset 0 0 0.4em 0 #b5b5b5, 0 0 0.5em 0 #b5b5b5;
  color: black;
  border: .2rem solid #c4c4c4;
  width: 390px;
  margin-top: 10px;
}
.glow-button8:hover {
  box-shadow: 0 0 1em 0.2em #b5b5b5;
  opacity: .90;
  color: black;
  text-decoration: none;
}

</style>