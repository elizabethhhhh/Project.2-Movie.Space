<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

?>

<header>
<div class="container text-center">

    <div id="carousel" class="carousel slide d-inline-block" data-ride="carousel">     
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="img-fluid" src="images/kino111.jpg" alt="...">
            </div>
            <div class="carousel-item">
                <img class="img-fluid" src="images/2kino22.jpg" alt="...">
            </div>
            <div class="carousel-item">
                <img class="img-fluid" src="images/kino33.jpg" alt="...">
            </div>
            <div class="carousel-item">
                <img class="img-fluid" src="images/kino4444.jpg" alt="...">
            </div>
            <div class="carousel-item">
                <img class="img-fluid" src="images/kino5551.jpg" alt="...">
            </div>
            <div class="carousel-item">
                <img class="img-fluid" src="images/kino666.jpg" alt="...">
            </div>
        </div>
        <!-- Элементы управления -->
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Предыдущий</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Следующий</span>
        </a>
    </div>
</div>
</header>


<div class="button"><img class="img-light" src="images/icons.png"></div>

<span class="phrase">Click me :)</span>


<div class="da">
    
<h1 class="display-4"><center><font color="white">Schedule</h1></font>
        <p class="tab"></p>
        
        <div class="p1"><p class="lead"><center><font color="white">You can buy tickets here<img src="images/arrow.png" width="30"></p></font></div>

    <div class="row">
    <p class="tab"></p>      
    <body>
      <p>
       <div class="col-lg-4" align="center">
       <a href="http://dip11/frontend/web/schedule_red_notice"><img src="images/1film.jpg" width="250"></a>
       <p class="lead" align="center">CINETECH+ | IMAX | 4DX</p>
       </div>

       <div class="col-lg-4" align="center">
       <a href="http://dip11/frontend/web/schedule_secrets_dumbledore"><img src="images/2film.jpg" width="250" height="370"></a>
       <p class="lead" align="center">CINETECH+</p>
       </div>

       <div class="col-lg-4" align="center">
       <a href="http://dip11/frontend/web/schedule_doctor_strange"><img src="images/3film.jpg" width="250" height="370"></a>
       <p class="lead" align="center">CINETECH+ | 4DX</p>
       </div>
      </p>
    </body>
    </div>
</div>
    <p class="tab"></p>

    <div class="row">
    <body>
      <p>
       <div class="col-lg-4" align="center">
       <a href="http://dip11/frontend/web/schedule_brave"><img src="images/4film.jpg" width="250" height="370"></a>
       <p class="lead" align="center">CINETECH+ | IMAX | 4DX</p>
       </div>

       <div class="col-lg-4" align="center">
       <a href="http://dip11/frontend/web/schedule_lion_king"><img src="images/5film.jpg" width="250"></a>
       <p class="lead" align="center">CINETECH+</p>
       </div>

       <div class="col-lg-4" align="center">
       <a href="http://dip11/frontend/web/schedule_raya"><img src="images/6film.jpg" width="250"></a>
       <p class="lead" align="center">CINETECH+ | IMAX | 4DX</p>
       </div>
      </p>
    </body>
    </div>
 <p class="tab"></p>



<script>
    let phrases = [
  {text: 'Самое время сходить в кино'},
  {text: 'Хэй, пошли в кино?'},
  {text: 'Сегодня идеальный день для просмотра фильма'},
  {text: 'Хэй, пошли в кино?'},
  {text: 'Бери друзей, пошли в кино'},
  {text: 'У нас самый вкусный попкорн'},
  {text: 'Приходи, у нас много новинок'},
  {text: 'Чур свою еду в зал не брать'},
  {text: 'Привет, мы будем рады тебя видеть'},
];

let button = document.querySelector('.button');
let phrase = document.querySelector('.phrase');

button.addEventListener('click', function() {
  let rand = Math.floor(Math.random() * phrases.length);
  phrase.innerText = phrases[rand].text;
});
</script>


<style>
.carousel{
  position: absolute;
  top: 0;
  left: 0;
  margin-bottom: 1300px;
  width: 100%;
}
.da{
    margin-top: 580px;
}
</style>

<!-- Кнопка настроение -->
<style>
  .img-light{
  position: absolute; 
  top: 112%; left: 5%;
  transform: translate(-50%, -50%);
  box-shadow: inset 0 0 0.3em 0#fadcf1, 0 0 0.3em 0 #fadcf1;
  border-radius: 3rem;
  width: 60px;
  height: 60px;
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
  left: 9%;
  top: 110%;
  font-size: 20px;
}
</style>

<style>
body{ 
    background: url(./images/fon.jpg);
    -moz-background-size: 100%; /* Firefox 3.6+ */
    -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
    -o-background-size: 100%; /* Opera 9.6+ */
    background-size: 100%; /* Современные браузеры */
}
.p1{
    font-size: 20pt;
}
</style>

<style type="text/css">
.row{
    color: white;
}
</style>
