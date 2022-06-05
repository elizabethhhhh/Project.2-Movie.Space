<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

?>


<span class="circle-image">
 <img src="images/Cat1.jpg">
</span>



<p><center><a class="glow-button1" href="http://dip11/frontend/web/login">Log in</a></p>
<p><center><a class="glow-button1" href="http://dip11/frontend/web/signup">Registration</a></p>
<p><center><a class="glow-button1" href="http://dip11/frontend/web/account">Buy as a guest</a></p>


<div class="l">____________________________________________________________</div>
<p class="tab"></p>

<p>Be a part of our club</p>


<!-- Кнопка -->
<style>
.glow-button1 {
  text-decoration: none;
  display: inline-block;
  padding: 14px 30px;
  margin: 4px 20px;
  border-radius: 4rem;
  box-shadow: inset 0 0 0.6em 0 #ff96c0, 0 0 0.5em 0 #ff96c0;
 
  font-weight: bold;
  letter-spacing: 0.5px;
  color: black;
  border: .2rem solid #fadcf1;
  width: 200px;
}
.glow-button1:hover {
  box-shadow: 0 0 3em 0.3em #ff96c0;
  opacity: .90;
  color: black;

}
.l{
   line-height: 0.1;
        
}
</style>


<style>

.circle-image{
    display: inline-block;
    overflow: hidden;
    width: 17%;
    padding-bottom: 17%;
    height: 0;
    position: relative;
    top: 10px;
    left: 460px;
}
.circle-image img{
  width:100%;
  height:100%;
  position: absolute;
  border-radius: 50%;
  object-fit: cover;
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