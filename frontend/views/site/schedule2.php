<p class="tab"></p>

<body>
    <!-- Контент страницы -->
	<div class="block-left">
    	    <img src="images/2film.jpg" width="170" class="leftimg"><p class="tab"></p>
    	    <h3>The Secrets of Dumbledore</h3><p class="tab"></p>
    	    <h5>6.6/10 <img src="images/heart.png" width="30" ></h5>
    	    <div class="p1">Technology</div> 
    	    <p>CINETECH+</p>
    	    <div class="p1">Duration</div>
    	    <p>120 min.</p>
    	    <p class="tab"></p><br>

    	    <p>Please choose a date: <br> 
      
        <div class="form_radio">
                <input id="radio-1" type="radio" onclick='today()' name="radio" value="1" checked>
                <label for="radio-1">today</label>
            </div>
     
            <div class="form_radio">
                <input id="radio-2" type="radio" onclick='tomorrow()' name="radio" value="2">
                <label for="radio-2">tomorrow</label>
            </div>
             
            <!--<div class="form_radio">
                <input id="radio-3" type="radio" onclick='week()' name="radio" value="3">
                <label for="radio-3">week</label>
            </div>-->
            </p>

    <div class="mydiv1" id="mydiv"></div>
    <p class="tab"></p>

    <div id='today'>
    	    <p>Choose a time for today: <br>
    		<span class="custom-dropdown">			 
    		    <select id="myselect">
    		        <option value="11:00">11:00</option>
    		        <option value="14:45">14:45</option>  
    		        <option value="19:30">19:30</option>
    		        <option value="23:00">23:00</option>
    		    </select>  
    		</span>
            </p>
    </div> 


    <div id='tomorrow'>
          <p>Choose a time for tomorrow: <br>
        <span class="custom-dropdown">       
            <select id="myselect1">
                <option value="15:45">15:45</option>  
                <option value="18:30">18:30</option>
                <option value="20:00">20:00</option>
            </select>  
        </span>
            </p>
    </div> 


    <!--<div id="week">
          <p>Choose a date for the week: <br>
             <input type="date" class="calendar" name="calendar" value="2022-06-20"
              min="2022-06-20" max="2022-06-26">
          </p>
    </div>-->


  </div>
</body>



<div class="block-right">
    <svg width="580" height="450" xmlns="http://www.w3.org/2000/svg" id="hall">
      <defs>
        <rect type="button" rx="4" id="place" height="17" width="22" stroke-width="0" stroke="#000"/>
      </defs>
      <g>
        <rect fill="#cccccc" id="canvas_background" height="452" width="582" y="-1" x="-1"/>
      </g>
      <g id="places">
        <use xlink:href="#place" y="194" x="90" data-row="1" data-place="1" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="194" x="117" data-row="1" data-place="2" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="194" x="144" data-row="1" data-place="3" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="194" x="171" data-row="1" data-place="4" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="194" x="198" data-row="1" data-place="5" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="194" x="225" data-row="1" data-place="6" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="194" x="252" data-row="1" data-place="7" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="194" x="279" data-row="1" data-place="8" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="194" x="306" data-row="1" data-place="9" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="194" x="333" data-row="1" data-place="10" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="194" x="360" data-row="1" data-place="11" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="194" x="387" data-row="1" data-place="12" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="194" x="414" data-row="1" data-place="13" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="194" x="441" data-row="1" data-place="14" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="194" x="468" data-row="1" data-place="15" data-price="80" fill="#969696"/>

        <use xlink:href="#place" y="217" x="90"  data-row="2" data-place="1" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="217" x="117" data-row="2" data-place="2" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="217" x="144" data-row="2" data-place="3" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="217" x="171" data-row="2" data-place="4" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="217" x="198" data-row="2" data-place="5" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="217" x="225" data-row="2" data-place="6" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="217" x="252" data-row="2" data-place="7" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="217" x="279" data-row="2" data-place="8" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="217" x="306" data-row="2" data-place="9" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="217" x="333" data-row="2" data-place="10" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="217" x="360" data-row="2" data-place="11" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="217" x="387" data-row="2" data-place="12" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="217" x="414" data-row="2" data-place="13" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="217" x="441" data-row="2" data-place="14" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="217" x="468" data-row="2" data-place="15" data-price="80" fill="#969696"/>

        <use xlink:href="#place" y="240" x="90"  data-row="3" data-place="1" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="240" x="117" data-row="3" data-place="2" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="240" x="144" data-row="3" data-place="3" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="240" x="171" data-row="3" data-place="4" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="240" x="198" data-row="3" data-place="5" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="240" x="225" data-row="3" data-place="6" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="240" x="252" data-row="3" data-place="7" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="240" x="279" data-row="3" data-place="8" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="240" x="306" data-row="3" data-place="9" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="240" x="333" data-row="3" data-place="10" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="240" x="360" data-row="3" data-place="11" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="240" x="387" data-row="3" data-place="12" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="240" x="414" data-row="3" data-place="13" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="240" x="441" data-row="3" data-place="14" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="240" x="468" data-row="3" data-place="15" data-price="80" fill="#969696"/>

        <use xlink:href="#place" y="263" x="90"  data-row="4" data-place="1" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="263" x="117" data-row="4" data-place="2" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="263" x="144" data-row="4" data-place="3" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="263" x="171" data-row="4" data-place="4" data-price="90" fill="#858585"/>
        <use xlink:href="#place" y="263" x="198" data-row="4" data-place="5" data-price="90" fill="#858585"/>
        <use xlink:href="#place" y="263" x="225" data-row="4" data-place="6" data-price="90" fill="#858585"/>
        <use xlink:href="#place" y="263" x="252" data-row="4" data-place="7" data-price="90" fill="#858585"/>
        <use xlink:href="#place" y="263" x="279" data-row="4" data-place="8" data-price="90" fill="#858585"/>
        <use xlink:href="#place" y="263" x="306" data-row="4" data-place="9" data-price="90" fill="#858585"/>
        <use xlink:href="#place" y="263" x="333" data-row="4" data-place="10" data-price="90" fill="#858585"/>
        <use xlink:href="#place" y="263" x="360" data-row="4" data-place="11" data-price="90" fill="#858585"/>
        <use xlink:href="#place" y="263" x="387" data-row="4" data-place="12" data-price="90" fill="#858585"/>
        <use xlink:href="#place" y="263" x="414" data-row="4" data-place="13" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="263" x="441" data-row="4" data-place="14" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="263" x="468" data-row="4" data-place="15" data-price="80" fill="#969696"/>

        <use xlink:href="#place" y="286" x="90"  data-row="5" data-place="1" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="286" x="117" data-row="5" data-place="2" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="286" x="144" data-row="5" data-place="3" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="286" x="171" data-row="5" data-place="4" data-price="90" fill="#858585"/>
        <use xlink:href="#place" y="286" x="198" data-row="5" data-place="5" data-price="90" fill="#858585"/>
        <use xlink:href="#place" y="286" x="225" data-row="5" data-place="6" data-price="90" fill="#858585"/>
        <use xlink:href="#place" y="286" x="252" data-row="5" data-place="7" data-price="90" fill="#858585"/>
        <use xlink:href="#place" y="286" x="279" data-row="5" data-place="8" data-price="90" fill="#858585"/>
        <use xlink:href="#place" y="286" x="306" data-row="5" data-place="9" data-price="90" fill="#858585"/>
        <use xlink:href="#place" y="286" x="333" data-row="5" data-place="10" data-price="90" fill="#858585"/>
        <use xlink:href="#place" y="286" x="360" data-row="5" data-place="11" data-price="90" fill="#858585"/>
        <use xlink:href="#place" y="286" x="387" data-row="5" data-place="12" data-price="90" fill="#858585"/>
        <use xlink:href="#place" y="286" x="414" data-row="5" data-place="13" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="286" x="441" data-row="5" data-place="14" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="286" x="468" data-row="5" data-place="15" data-price="80" fill="#969696"/>

        <use xlink:href="#place" y="309" x="90"  data-row="6" data-place="1" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="309" x="117" data-row="6" data-place="2" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="309" x="144" data-row="6" data-place="3" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="309" x="171" data-row="6" data-place="4" data-price="90" fill="#858585"/>
        <use xlink:href="#place" y="309" x="198" data-row="6" data-place="5" data-price="90" fill="#858585"/>
        <use xlink:href="#place" y="309" x="225" data-row="6" data-place="6" data-price="90" fill="#858585"/>
        <use xlink:href="#place" y="309" x="252" data-row="6" data-place="7" data-price="90" fill="#858585"/>
        <use xlink:href="#place" y="309" x="279" data-row="6" data-place="8" data-price="90" fill="#858585"/>
        <use xlink:href="#place" y="309" x="306" data-row="6" data-place="9" data-price="90" fill="#858585"/>
        <use xlink:href="#place" y="309" x="333" data-row="6" data-place="10" data-price="90" fill="#858585"/>
        <use xlink:href="#place" y="309" x="360" data-row="6" data-place="11" data-price="90" fill="#858585"/>
        <use xlink:href="#place" y="309" x="387" data-row="6" data-place="12" data-price="90" fill="#858585"/>
        <use xlink:href="#place" y="309" x="414" data-row="6" data-place="13" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="309" x="441" data-row="6" data-place="14" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="309" x="468" data-row="6" data-place="15" data-price="80" fill="#969696"/>

        <use xlink:href="#place" y="332" x="90"  data-row="7" data-place="1" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="332" x="117" data-row="7" data-place="2" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="332" x="144" data-row="7" data-place="3" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="332" x="171" data-row="7" data-place="4" data-price="90" fill="#858585"/>
        <use xlink:href="#place" y="332" x="198" data-row="7" data-place="5" data-price="90" fill="#858585"/>
        <use xlink:href="#place" y="332" x="225" data-row="7" data-place="6" data-price="90" fill="#858585"/>
        <use xlink:href="#place" y="332" x="252" data-row="7" data-place="7" data-price="90" fill="#858585"/>
        <use xlink:href="#place" y="332" x="279" data-row="7" data-place="8" data-price="90" fill="#858585"/>
        <use xlink:href="#place" y="332" x="306" data-row="7" data-place="9" data-price="90" fill="#858585"/>
        <use xlink:href="#place" y="332" x="333" data-row="7" data-place="10" data-price="90" fill="#858585"/>
        <use xlink:href="#place" y="332" x="360" data-row="7" data-place="11" data-price="90" fill="#858585"/>
        <use xlink:href="#place" y="332" x="387" data-row="7" data-place="12" data-price="90" fill="#858585"/>
        <use xlink:href="#place" y="332" x="414" data-row="7" data-place="13" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="332" x="441" data-row="7" data-place="14" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="332" x="468" data-row="7" data-place="15" data-price="80" fill="#969696"/>

        <use xlink:href="#place" y="355" x="90"  data-row="8" data-place="1" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="355" x="117" data-row="8" data-place="2" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="355" x="144" data-row="8" data-place="3" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="355" x="171" data-row="8" data-place="4" data-price="90" fill="#858585"/>
        <use xlink:href="#place" y="355" x="198" data-row="8" data-place="5" data-price="90" fill="#858585"/>
        <use xlink:href="#place" y="355" x="225" data-row="8" data-place="6" data-price="90" fill="#858585"/>
        <use xlink:href="#place" y="355" x="252" data-row="8" data-place="7" data-price="90" fill="#858585"/>
        <use xlink:href="#place" y="355" x="279" data-row="8" data-place="8" data-price="90" fill="#858585"/>
        <use xlink:href="#place" y="355" x="306" data-row="8" data-place="9" data-price="90" fill="#858585"/>
        <use xlink:href="#place" y="355" x="333" data-row="8" data-place="10" data-price="90" fill="#858585"/>
        <use xlink:href="#place" y="355" x="360" data-row="8" data-place="11" data-price="90" fill="#858585"/>
        <use xlink:href="#place" y="355" x="387" data-row="8" data-place="12" data-price="90" fill="#858585"/>
        <use xlink:href="#place" y="355" x="414" data-row="8" data-place="13" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="355" x="441" data-row="8" data-place="14" data-price="80" fill="#969696"/>
        <use xlink:href="#place" y="355" x="468" data-row="8" data-place="15" data-price="80" fill="#969696"/>

        <use xlink:href="#place" y="398" x="57"  data-row="9" data-place="1" data-price="170" fill="#737373"/>
        <use xlink:href="#place" y="398" x="94"  data-row="9" data-place="2" data-price="170" fill="#737373"/>
        <use xlink:href="#place" y="398" x="131" data-row="9" data-place="3" data-price="170" fill="#737373"/>
        <use xlink:href="#place" y="398" x="168" data-row="9" data-place="4" data-price="170" fill="#737373"/>
        <use xlink:href="#place" y="398" x="205" data-row="9" data-place="5" data-price="170" fill="#737373"/>
        <use xlink:href="#place" y="398" x="242" data-row="9" data-place="6" data-price="170" fill="#737373"/>
        <use xlink:href="#place" y="398" x="279" data-row="9" data-place="7" data-price="170" fill="#737373"/>
        <use xlink:href="#place" y="398" x="316" data-row="9" data-place="8" data-price="170" fill="#737373"/>
        <use xlink:href="#place" y="398" x="353" data-row="9" data-place="9" data-price="170" fill="#737373"/>
        <use xlink:href="#place" y="398" x="390" data-row="9" data-place="10" data-price="170" fill="#737373"/>
        <use xlink:href="#place" y="398" x="427" data-row="9" data-place="11" data-price="170" fill="#737373"/>
        <use xlink:href="#place" y="398" x="464" data-row="9" data-place="12" data-price="170" fill="#737373"/>
        <use xlink:href="#place" y="398" x="501" data-row="9" data-place="13" data-price="170" fill="#737373"/>



          <line stroke="#000" stroke-linecap="null" stroke-linejoin="null" id="svg_134" y2="107.11458" x2="539.49999" y1="107.11458" x1="38.5" fill-opacity="null" stroke-opacity="null" fill="none"/>
          <text xml:space="preserve" text-anchor="start" font-size="24" id="svg_135" y="134.11458" x="256.5" fill-opacity="null" stroke-opacity="null" stroke-width="0" stroke="#000" fill="#000000">Screen</text>
          <rect stroke="#000" rx="4" id="svg_136" height="17" width="22" y="27.05729" x="165" fill-opacity="null" stroke-opacity="null" stroke-width="0" fill="#969696"/>
          <rect stroke="#000" rx="4" id="svg_137" height="17" width="22" y="27.05729" x="261" fill-opacity="null" stroke-opacity="null" stroke-width="0" fill="#858585"/>
          <rect rx="4" id="svg_138" height="17" width="22" y="27.05729" x="357" stroke-opacity="null" stroke-width="0" fill="#737373" stroke="#000"/>
          <text font-weight="bold" xml:space="preserve" text-anchor="start" font-family="'Palatino Linotype', 'Book Antiqua', Palatino, serif" font-size="16" id="svg_139" y="41" x="198" fill-opacity="null" stroke-opacity="null" stroke-width="0" stroke="#000" fill="#000000">80 ₴</text>
          <text font-weight="bold" xml:space="preserve" text-anchor="start" font-family="'Palatino Linotype', 'Book Antiqua', Palatino, serif" font-size="16" id="svg_140" y="41" x="294" fill-opacity="null" stroke-opacity="null" stroke-width="0" stroke="#000" fill="#000000">90 ₴</text>
          <text font-weight="bold" xml:space="preserve" text-anchor="start" font-family="'Palatino Linotype', 'Book Antiqua', Palatino, serif" font-size="16" id="svg_141" y="41" x="390" fill-opacity="null" stroke-opacity="null" stroke-width="0" stroke="#000" fill="#000000">160 ₴</text>
      </g>
    </svg>

 <div id="output"></div>
 
    <p>
        <center><a id="buy-btn" class="glow-button" href="http://dip11/frontend/web/question_page">Buy tickets here ❯<span>0</span></a><center>
    </p>
</div>




<style>
    .block-left{width:45%;height:700px;overflow:auto;float:left;}
    .block-right{width:55%;height:700px;overflow:auto;}
    .p1{
        line-height: 0.8;
        color: #878787;
    }
    body{ 
        background: url(./images/fon3.png);
        -moz-background-size: 100%;
        -webkit-background-size: 100%;
        -o-background-size: 100%;
        background-size: 100%;
     }
    p{
        font-size: 13pt;
    }
    .leftimg {
    float:left; /* Выравнивание по левому краю */
    margin: 7px 20px 7px 0; /* Отступы вокруг картинки */
   }
</style> 



<style>
/* Места в зале */
#place:hover {
  stroke-width: 1;
  stroke: #08f;
}

#places .selected {
  fill: #ff94bf;
}

#buy-btn > span {
  margin-left: 1.5em;
}

#buy-btn > span::after {
  content: '₴';
  display: inline;
}
#output{
  background-color:#ff94bf; 
  border-radius: 15px;
  margin-left: 15%;
  margin-right: 20%;
  color:black;
  font-size:20px;
  text-align:center;
}
.mydiv1{
  background-color:#ff94bf; 
  color:black;
  margin-left: 10%;
  margin-right: 10%;
  border-radius: 15px;
  font-size:20px;
  text-align:center;
}
.glow-button {
  text-decoration: none;
  display: inline-block;
  padding: 15px 30px;
  margin: 10px;
  margin-left: 10%;
  margin-right: 15%;
  border-radius: 4rem;
  box-shadow: inset 0 0 0.6em 0 #ff96c0, 0 0 0.5em 0 #ff96c0;
 
  font-weight: bold;
  letter-spacing: 0.5px;
  color: black;
  border: .2rem solid #fadcf1;
}
.glow-button:hover {
  box-shadow: 0 0 3em 0.3em #ff96c0;
  opacity: .90;
  color: black;
}
</style>


