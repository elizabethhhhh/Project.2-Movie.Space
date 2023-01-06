<?php
use yii\bootstrap4\Html;
use \yii\widgets\ActiveForm;


// $this->title = 'Application Form';
?>
<h1 class="display-4"><font color="white">Application Form</h1></font>
    <p class="tab"></p>
    <p>
        Hello, we are very happy that you have chosen our salon.<br>
            You can make an appointment for the service right now by writing the time and type of service. Or you can leave your number and you will be contacted by our administrator for further appointment.<br>
            With love Beauty Space🪐
        </p>
<h1><?= Html::encode($this->title) ?></h1>
<?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>


<div class="row">
    <div class="rw">
   <div class="col-lg-5">
       <div class="panel panel-default">
           <div class="panel-heading">Message Sent</div>
           <div class="panel-body">
               <p><b>Name:</b> <?=$model->name?> </p>
               <p><b>Number:</b> <?=$model->number?> </p>
               <p><b>Date:</b> <?=$model->date?> </p>
               <p><b>Service:</b> <?=$model->service?> </p>
           </div>
       </div>
       <div class="alert alert-success">
           Thank you for contacting us. We will respond to you as soon as possible.
       </div>
   </div>
</div>
</div>
   <?php else: ?>
   
<div class="row">
           <div class="col-lg-5">
               <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                   <?= $form->field($model, 'name') ?>
                   <?= $form->field($model, 'number') ?>
                   <?= $form->field($model, 'date') ?>
                   <?= $form->field($model, 'service')->textArea(['rows' => 6]) ?>
                  <div class="form-group">
                       <div>
                   <button class="glow-button6" type="submit">Submit</button>
                       </div>
                   </div>
               <?php ActiveForm::end(); ?>
           </div>
       </div>
       

<?php endif; ?>






<style>
.glow-button6 {
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
.glow-button6:hover {
  box-shadow: 0 0 1em 0.2em #6e8ef5;
  opacity: .90;
  color: white;
  
}
a{
    color: #34cf81;
}
</style>



<style>
    body{ 
        background: url(./images/fon3.png);
        background-size: 100%;
     }
</style> 
<body>



<!-- <input type="date"> -->
