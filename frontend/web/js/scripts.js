/* Страницы schedule расписание*/
document.getElementById('today').style.display = 'none';
function today() {
  document.getElementById('today').style.display = 'block';
}

document.getElementById('tomorrow').style.display = 'none';
function tomorrow() {
  document.getElementById('tomorrow').style.display = 'block';
}

/*
document.getElementById('week').style.display = 'none';
function week() {
  document.getElementById('week').style.display = 'block';
}
*/

/* Страницы schedule текст */
document.getElementById("myselect").addEventListener("change", function(){
    document.getElementById('mydiv').innerHTML = "Selected time for today: "+this.value;   
});

document.getElementById("myselect1").addEventListener("change", function(){
    document.getElementById('mydiv').innerHTML = "Selected time for tomorrow: "+this.value;   
});

/* Страницы schedule зал */
document.addEventListener('DOMContentLoaded', function() {        
  let places = document.querySelector('#places'),
      output = document.querySelector('#output'),
            btn = document.querySelector('#buy-btn'),
            _price = 0;
    
    btn.style.visibility = 'hidden';

  places.addEventListener('click', function(e) {
    let target = e.target;
    if(target.tagName.toLowerCase() === 'use') {
      target.classList.toggle('selected');
      
      let selected = places.querySelectorAll('.selected');
      if(selected.length > 0) {
                btn.style.visibility = 'visible';
        output.innerHTML = '';
                _price = 0;
        selected.forEach(function(e) {
          let row = e.getAttribute('data-row'),
              place = e.getAttribute('data-place'),
              price = e.getAttribute('data-price');
                    
                    _price += Number(price);
                    
                    btn.querySelector('span').innerText = _price;
          output.innerHTML += `Row: ${row}, Place: ${place}, Price: ${price}₴<br>`;
        });
      } else {
                btn.style.visibility = 'hidden';
                output.innerText = 'Please choose a place';
            }
    }
  });
})