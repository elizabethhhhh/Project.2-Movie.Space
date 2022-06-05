<style>
    body{ 
        background: url(../images/fon.jpg);
        -moz-background-size: 100%;
        -webkit-background-size: 100%;
        -o-background-size: 100%;
        background-size: 100%;
     }
</style>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<body>
  <div class='result'>
  </div>
  <div class='cinemaHall zal1'></div>

</body>



<script>
// план зала по рядам 
var cinemaHall1 = {
    row: [15, 15, 15, 15, 15, 15, 15, 15, 17]
  },
  cinemaHallMap = '';
$.each(cinemaHall1.row, function(row, numberOfSeats) {
  cinemaHallRow = '';
  for (i = 1; i <= numberOfSeats; i++) {
    // собираем ряды
    cinemaHallRow += '<div class="seat" data-row="' +
      i + '" data-seat="' +
      i + '">&nbsp;</div>';
  }
  //собираем зал с проходами между рядами
  cinemaHallMap += cinemaHallRow + '<div class="passageBetween">&nbsp;</div>';
});

//заполняем в html зал номер 1
$('.zal1').html(cinemaHallMap);
// тут по клику определяем что место выкуплено
$('.seat').on('click', function(e) {
  // если первый раз кликнули билет выкупили, 
  // если повторно значит вернули билет
  $(e.currentTarget).toggleClass('bay');
  //показываем сколько билетов выкуплено
  showBaySeat();
});

function showBaySeat() {
  result = '';
  //ищем все места купленные и показываем список выкупленных мест
  $.each($('.seat.bay'), function(key, item) {
    result += '<div class="ticket">Row: ' +
      $(item).data().row + ' Place:' +
      $(item).data().seat + '</div>';
  });

  $('.result').html(result);
}
</script>



<style>
  .cinemaHall {
  text-align: center;
  display: inline-block;
  vertical-align: top;
}
.seat {
  height: 17px;
  width: 22px;
  margin-right: 4px;
  background-color: #595959;
  display: inline-block;
  cursor: pointer;
  border-radius: 3px 3px 3px 3px;
}
.passageBetween {
  height: 1px;
  width: 100%;
  display: block;
}
.bay {
  background-color: #ff87c5;
}
.result {
  font-size: 17px;
  display: inline-block;
  width: 150px;
  max-height: 200px;
  overflow-y: auto;
  margin-right: 5px;
}
</style>
