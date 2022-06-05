<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

print_r(Yii::$app->session->get('span')); // выведет "test"
?>


<h1 class="display-4"><center><font color="white">Your tickets</h1></font>
    <p class="tab"></p>



<div class="block-left">
<div class="button"><img class="img-light" src="images/icons.png"></div>

<div class="advice">
  <span class="phrase">Hello :)</span>
</div>

<div class="l">____________________________________________________________</div>

<div class="da">
<p>No tickets selected yet</p>
</div>

<!-- Кнопка -->
<style>
  .img-light{
  position: absolute; 
  top: 40%; left: 13%;
  transform: translate(-50%, -50%);
  box-shadow: inset 0 0 0.3em 0#fadcf1, 0 0 0.3em 0 #fadcf1;
  border-radius: 4rem;
  width: 100px;
  height: 100px;
  border: .2rem solid #fadcf1;
}
.img-light:hover {
    opacity: .90;
    color: #fff;
  box-shadow: 0 0 3em 0.3em #fadcf1;
}

body {
  color: white;
}

.phrase {
  position: absolute;
  left: 20%;
  top: 37%;
  font-size: 24px;
}
.l{
  position: absolute;
  left: 4%;
  top: 50%;
}
.da{
    margin-top: 170px;
}
</style>

</div>

<script>
    let phrases = [
  {text: 'Hi!'},
  {text: 'Hello!'},

];

let button = document.querySelector('.button');
let phrase = document.querySelector('.phrase');

button.addEventListener('click', function() {
  let rand = Math.floor(Math.random() * phrases.length);
  phrase.innerText = phrases[rand].text;
});
</script>




<div class="block-right">

</div>    



<style>
    .block-left{width:45%;height:700px;overflow:auto;float:left;}
    .block-right{width:55%;height:700px;overflow:auto;}
    body{ 
        background: url(./images/fon.jpg);
        -moz-background-size: 100%;
        -webkit-background-size: 100%;
        -o-background-size: 100%;
        background-size: 100%;
     }
</style> 