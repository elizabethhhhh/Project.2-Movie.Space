<div class="block-right">
    <svg width="580" height="450" xmlns="http://www.w3.org/2000/svg" id="hall">
        <defs>
            <rect type="button" rx="4" id="place" height="17" width="22" stroke-width="0" stroke="#000" />
        </defs>
        <g>
            <rect fill="#cccccc" id="canvas_background" height="452" width="582" y="-1" x="-1" />
        </g>
        <g id="places">

            <use xlink:href="#place" y="263" x="90" data-row="4" data-place="1" data-price="80" fill="#969696" />
            <use xlink:href="#place" y="263" x="117" data-row="4" data-place="2" data-price="80" fill="#969696" />
            <use xlink:href="#place" y="263" x="144" data-row="4" data-place="3" data-price="80" fill="#969696" />
            <use xlink:href="#place" y="263" x="171" data-row="4" data-place="4" data-price="90" fill="#858585" />
            <use xlink:href="#place" y="263" x="198" data-row="4" data-place="5" data-price="90" fill="#858585" />
            <use xlink:href="#place" y="263" x="225" data-row="4" data-place="6" data-price="90" fill="#858585" />
            <use xlink:href="#place" y="263" x="252" data-row="4" data-place="7" data-price="90" fill="#858585" />
            <use xlink:href="#place" y="263" x="279" data-row="4" data-place="8" data-price="90" fill="#858585" />
            <use xlink:href="#place" y="263" x="306" data-row="4" data-place="9" data-price="90" fill="#858585" />
            <use xlink:href="#place" y="263" x="333" data-row="4" data-place="10" data-price="90" fill="#858585" />
            <use xlink:href="#place" y="263" x="360" data-row="4" data-place="11" data-price="90" fill="#858585" />
            <use xlink:href="#place" y="263" x="387" data-row="4" data-place="12" data-price="90" fill="#858585" />
            <use xlink:href="#place" y="263" x="414" data-row="4" data-place="13" data-price="80" fill="#969696" />
            <use xlink:href="#place" y="263" x="441" data-row="4" data-place="14" data-price="80" fill="#969696" />
            <use xlink:href="#place" y="263" x="468" data-row="4" data-place="15" data-price="80" fill="#969696" />

            <use xlink:href="#place" y="286" x="90" data-row="5" data-place="1" data-price="80" fill="#969696" />
            <use xlink:href="#place" y="286" x="117" data-row="5" data-place="2" data-price="80" fill="#969696" />
            <use xlink:href="#place" y="286" x="144" data-row="5" data-place="3" data-price="80" fill="#969696" />
            <use xlink:href="#place" y="286" x="171" data-row="5" data-place="4" data-price="90" fill="#858585" />
            <use xlink:href="#place" y="286" x="198" data-row="5" data-place="5" data-price="90" fill="#858585" />
            <use xlink:href="#place" y="286" x="225" data-row="5" data-place="6" data-price="90" fill="#858585" />
            <use xlink:href="#place" y="286" x="252" data-row="5" data-place="7" data-price="90" fill="#858585" />
            <use xlink:href="#place" y="286" x="279" data-row="5" data-place="8" data-price="90" fill="#858585" />
            <use xlink:href="#place" y="286" x="306" data-row="5" data-place="9" data-price="90" fill="#858585" />
            <use xlink:href="#place" y="286" x="333" data-row="5" data-place="10" data-price="90" fill="#858585" />
            <use xlink:href="#place" y="286" x="360" data-row="5" data-place="11" data-price="90" fill="#858585" />
            <use xlink:href="#place" y="286" x="387" data-row="5" data-place="12" data-price="90" fill="#858585" />
            <use xlink:href="#place" y="286" x="414" data-row="5" data-place="13" data-price="80" fill="#969696" />
            <use xlink:href="#place" y="286" x="441" data-row="5" data-place="14" data-price="80" fill="#969696" />
            <use xlink:href="#place" y="286" x="468" data-row="5" data-place="15" data-price="80" fill="#969696" />

        </g>
    </svg>

    <select id="time">
        <option value="13:00">13:00</option>
        <option value="14:30">14:30</option>
    </select>
    
    <div id="output"></div>
    <p>
        <center><a id="buy-btn" class="glow-button" href="http://dip11/frontend/web/test2">Buy tickets here <span>0</span></a></center>
    </p>
</div>

<script>
        
document.addEventListener("DOMContentLoaded", function () {
    let places = document.querySelector("#places"),
        output = document.querySelector("#output"),
        buyBtn = document.querySelector("#buy-btn"),
        time = document.querySelector("#time"),
        data = {
            tickets: []
        };

    buyBtn.style.visibility = "hidden";

    places.addEventListener("click", function (e) {
        let target = e.target;
        if (target.tagName.toLowerCase() === "use") {
            target.classList.toggle("selected");
            let _price = 0;

            let selected = places.querySelectorAll(".selected");
            if (selected.length > 0) {
                buyBtn.style.visibility = "visible";
                output.innerHTML = "";
                selected.forEach(function (e) {
                    let row = e.getAttribute("data-row"),
                        place = e.getAttribute("data-place"),
                        price = e.getAttribute("data-price");

                    _price += +price;

                    buyBtn.querySelector("span").innerText = _price;
                    output.innerHTML += `Row: ${row}, Place: ${place}, Price: ${price}₴<br>`;
                });
            } else {
                buyBtn.style.visibility = "hidden";
                output.innerText = "Please choose a place";
            }
        }
    });

    // BUY
    buyBtn.addEventListener("click", function (e) {
        // GET TIME
        if (time.value) data.sessionTime = time.value;
        else {
            alert("Выберите время");
            return false; // отмена отправки
        }

        // GET TICKETS
        let selected = places.querySelectorAll(".selected");
        if (selected.length > 0) {
            data.tickets = [];
            data.price = 0;

            selected.forEach(function (e) {
                let row = e.getAttribute("data-row"),
                    place = e.getAttribute("data-place"),
                    price = e.getAttribute("data-price");

                data.tickets.push({
                    hallRow: +row,
                    place: +place,
                    price: +price
                });

                data.price += +price;
            });
        } else {
            alert("Выберите места");
            return false; // отмена отправки
        }

        data.movieName = "название фильма";

        console.info(data); // Можно удалить
        // Тут отправка данных в PHP
        const url = "http://dip11/frontend/web/test2"; //здесь указываем путь до обработчика, который получить данные в своё распоряжение
        let xhr = new XMLHttpRequest();

        xhr.open("POST", url, true); //отправляем асинхронно (true) данные методом POST обработчику по адресу url

        xhr.setRequestHeader("Content-type", "application/json; charset=UTF-8"); //устанавливаем для HTTP-запроса необходимы заголовки, чтобы он понимал, какие данные ему перемещать
        xhr.addEventListener("readystatechange", () => {
            if (xhr.readyState === 4 && xhr.status === 200) {
                //если запрос прошёл успешно
                console.log(xhr.responseText); //покажем в консоли ответ от сервера (вы же можете выводить сообщение о том, что билет куплен)
            }
        });
        xhr.send("data=" + JSON.stringify(data)); //собственно, отправляем данные на сервер, но прежде конвертируем объект в JSON-строку
    });
});

</script>

    
    <style>
#place:hover {
    stroke-width: 1;
    stroke: #08f;
}

#places .selected {
    fill: #ff94bf;
}

#buy-btn {
    display: inline-block;
    border-radius: 99px;
    background: #09f;
    padding: 1em 1.5em;
    color: #fff;
    text-decoration: none;
    box-sizing: border-box;
    visibility: hidden;
}

#buy-btn > span {
    margin-left: 1.5em;
}

#buy-btn > span::after {
    content: '₴';
    display: inline;
}
    </style>



