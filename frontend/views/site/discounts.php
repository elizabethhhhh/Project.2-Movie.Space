<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

?>
<div class="photo">
<img src="images/t5.png" width="100%"><p class="tab"></p>
</div>


<div class="da">
    <div class="p2">&nbsp &nbsp &nbsp Movie Space always offers discounts for schoolchildren, students, seniors, people with disabilities, veterans, families with many children, and orphans on weekdays only for standard seats. Please note that discounts for students are valid only on weekdays after 14:00, except during vacations (during vacations the discount is valid during all working hours).<p class="tab"></p>
    <div class="p2">&nbsp &nbsp &nbsp Discounts are available for in-patient students of any higher education institution in Ukraine and students of foreign institutions (academy, university, institute, conservatory, college, technical school, college).<p class="tab"></p>
   <div class="p2">&nbsp &nbsp &nbsp To get a discount for an organized group of people, you need to discuss it with the administration at the cinema itself or apply in online chat on the site or call +380 xx xxx xxxx (daily from 9:00 to 22:00; free of charge in Ukraine from any) number.)<p class="tab"></p>
    <div class="p2">&bull; To buy a discounted ticket, you need to go to the cinema box office and show a student, student card or other ID that confirms your right for benefits. However, you can only buy one discounted cinema ticket per ID.<p class="tab"></p>

    <div class="p2"><img src='images/icons2.png' width="60">Every Wednesday is Audience Day at all Movie Space theaters.</p>
    <div class="p2">&bull; All-day tickets to non-premiere movies at maximum discounted prices, and in the popcorn bar and movie market a special offer on Combo: popcorn 2.5L + Pepsi 0.8L.<p class="tab"></p>
    <div class="p2">&nbsp &nbsp &nbsp On the day of the spectator there are discounts for schoolchildren, students, pensioners, disabled people, veterans, ATO participants, families with many children, orphans and organized groups of visitors. Please note that they are not discouraged.<p class="tab"></p>

    <div class="p2"><img src='images/icons1.png' width="60">To buy a ticket with a birthday discount, show a document confirming the date of your birthday at the ticket office and you will be happy to get it.<p class="tab"></p>

    <div class="p2">&bull; All children under the age of 6 (inclusive) accompanied by an adult can come to Planet Kino cinemas for free. No separate seat is provided for the child (the child can sit in any free seat or in the arms of the parents). One child may enter with one adult. Without an adult, the child is not allowed to enter the cinema.<p class="tab"></p>


    &bull; Discounts are not available on premiere or holiday dates. The premiere period is determined by the distributor in each film's contract and may be shortened or extended, depending on the terms of the contract.<br>

    &bull; In addition, distributors set minimum prices for some films, so we are not allowed to set ticket prices below those prices.<br>

    &bull; You can find out when film discounts are available on each film's page on our website.<br>

    &bull; Discounts are not available for VIP seat tickets.<br>

    &bull; Discounts are not available for extramural students.<br>

    &bull; Discounts are available for 4DX movies on Audience Day and in the form of bonus tickets and a free birthday ticket.
    </div>
</div>


<!-- Верхнее фото -->
<style>
.photo{
  position: absolute;
  top: 0;
  left: 0;
  margin-bottom: 1300px;
  width: 100%;
}

</style>

<style>

.da{
    margin-top: 310px;
}
.p1{
    line-height: 1.8;
    color: black;
    font-size: 14pt;
    }
.p2{
    line-height: 1.5;
    color: black;
    font-size: 14pt;
}
</style>



<style>
    body{ 
        background: url(./images/fon.jpg);
        -moz-background-size: 100%;
        -webkit-background-size: 100%;
        -o-background-size: 100%;
        background-size: 100%;
     }
</style>



<div class="button"><img class="img-light" src="images/icons.png"></div>

<div class="advice">
  <span class="phrase">Click me :)</span>
</div>


<!-- Кнопка -->
<style>
  .img-light{
  position: absolute; 
  top: 27%; left: 3.5%;
  transform: translate(-50%, -50%);
  box-shadow: inset 0 0 0.3em 0#ffd6ef, 0 0 0.3em 0 #ffd6ef;
  border-radius: 3rem;
  width: 57px;
  height: 57px;
  border: .2rem solid #ffd6ef;
}
.img-light:hover {
    opacity: .90;
    color: #fff;
  box-shadow: 0 0 3em 0.3em #ffd6ef;
}
</style>

<style>

body {
  color: white;
}


.phrase {
  position: absolute;
  left: 7%;
  top: 24.5%;
  font-size: 20px;
  color: white;
}
</style>



<script>
    let phrases = [
  {text: 'Не упусти свою скидку'},
  {text: 'Следи за новостями'},
  {text: 'А ты знаешь за день зрителя?'},
  {text: 'Будь в теме с нами'},
  {text: 'Запомни условия скидок, пригодятся'},
  {text: 'У тебя день рождения, лови бесплатный билет'},
  {text: 'Не упусти свою скидку'},
  {text: 'А ты знаешь за день зрителя?'},


];

let button = document.querySelector('.button');
let phrase = document.querySelector('.phrase');

button.addEventListener('click', function() {
  let rand = Math.floor(Math.random() * phrases.length);
  phrase.innerText = phrases[rand].text;
});
</script>

