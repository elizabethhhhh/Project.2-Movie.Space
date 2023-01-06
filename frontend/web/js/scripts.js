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