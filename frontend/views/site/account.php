<?php

/** @var yii\web\View $this */

use yii\helpers\Html;



$conn=mysqli_connect('localhost', 'liza1', 'liza1234', 'yii2advanced');
$sql="SELECT * FROM tikanonymous WHERE id='1'";
$result=mysqli_query($conn, $sql);

$tikanonymous=mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);
mysqli_close($conn);
?>


<h1 class="display-4"><center><font color="black">Your tickets</h1></font>
    <p class="tab"></p>


<div class="button"><img class="img-light" src="images/icons.png"></div>

<div class="advice">
  <span class="phrase">Hello :)</span>
</div>


<div class="da">

<center>
<?php foreach($tikanonymous as $ticket): ?>
    <table>
<tr><th>&nbsp &nbsp Name &nbsp |</th><th>Row &nbsp |</th><th>Place &nbsp |</th><th>Price &nbsp &nbsp |</th><th>Time &nbsp &nbsp |</th><th>Movie </th></tr>

    <tr><td>&nbsp &nbsp &nbsp &nbsp<?php echo htmlspecialchars($ticket['customer']); ?>&nbsp &nbsp &nbsp|</td>
    <td>&nbsp &nbsp<?php echo htmlspecialchars($ticket['row']); ?>&nbsp &nbsp &nbsp &nbsp|</td></td>
    <td>&nbsp &nbsp<?php echo htmlspecialchars($ticket['place']); ?>&nbsp &nbsp &nbsp &nbsp &nbsp|</td>
    <td>&nbsp<?php echo htmlspecialchars($ticket['price']); ?>&nbsp₴ &nbsp &nbsp &nbsp &nbsp|</td>
    <td>&nbsp &nbsp<?php echo htmlspecialchars($ticket['time']); ?>&nbsp &nbsp &nbsp|</td>
    <td> &nbsp<?php echo htmlspecialchars($ticket['movie']); ?>&nbsp &nbsp </td></tr>
</table>
<?php endforeach; ?>
<div class="rttt">

<center><a  class="glow-button16" href="http://dip11/frontend/web/">Total amount ❯ 90 ₴</a><center>

</div>

<div class="rtt">
<p>Your QR-code (show it when you enter the hall)</p>
<div id="statya">
<img src="images/qrcode.png">
</div>
</div>
</center>

<style>
.glow-button16 {
  text-decoration: none;
  display: inline-block;
  padding: 15px 30px;
  border-radius: 4rem;
  box-shadow: inset 0 0 0.6em 0 #ff96c0, 0 0 0.5em 0 #ff96c0;
  margin-top: 2%;
  font-weight: bold;
  letter-spacing: 0.5px;
  color: black;
  border: .2rem solid #fadcf1;
}
.glow-button16:hover {
  box-shadow: 0 0 3em 0.3em #ff96c0;
  opacity: .90;
  color: black;
}
.rtt{
        font-size: 20px;
        color: black;
    }

    .rtt{
        margin-top: 3%;
        font-size: 20px;
        color: black;
    }
    #statya img{
    padding-bottom:30px;
    height:200px;
    }
 
 #statya img:hover{
    height:270px;
    padding-bottom:17px;
    }
table {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
text-align: center;
border-collapse: collapse;
border-spacing: 5px;
background: #ff94bf;
border-radius: 20px;
}
th {
font-size: 22px;
font-weight: 300;
padding: 12px 10px;
border-bottom: 2px solid #545352;
color: #545352;
}

td {
padding: 15px;
color: black;
}
  </style>


<!-- Кнопка -->
<style>
  .img-light{
  position: absolute; 
  top: 30%; left: 7%;
  transform: translate(-50%, -50%);
  box-shadow: inset 0 0 0.3em 0#fadcf1, 0 0 0.3em 0 #fadcf1;
  border-radius: 4rem;
  width: 65px;
  height: 65px;
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
  left: 11%;
  top: 27%;
  font-size: 21px;
}

.da{
    margin-top: 70px;

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