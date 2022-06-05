<!DOCTYPE html>
<html>
 <head>
 <title></title>
 
 </head>
 <body>


    <br>


    <script>
document.addEventListener('DOMContentLoaded', function() {        
    let places = document.querySelector('#places'),
            output = document.querySelector('#output');

    places.addEventListener('click', function(e) {
        let target = e.target;
        if(target.tagName.toLowerCase() === 'use') {
            target.classList.toggle('selected');
            
            let selected = places.querySelectorAll('.selected');
            if(selected.length > 0) {
                output.innerHTML = '';
                selected.forEach(function(e) {
                    let row = e.getAttribute('data-row'),
                            place = e.getAttribute('data-place');
                    output.innerHTML += `Ряд: ${row}, Место: ${place};<br>`;
                });
            } else output.innerText = 'Ничего не выбрано';
        }
    });
})    
    </script>

    
    <style>
    #places use {
    
    }
    #place:hover {
        stroke-width: 1;
        stroke: #08f;
    }

    #places .selected {
        fill: #ff87c5;
    }
    </style>



    <svg width="580" height="450" xmlns="http://www.w3.org/2000/svg" id="hall">
      <defs>
        <rect type="button" rx="4" id="place" height="17" width="22" stroke-width="0" stroke="#000"/>
      </defs>
      <g>
        <rect fill="#cccccc" id="canvas_background" height="452" width="582" y="-1" x="-1"/>
      </g>
      <g id="places">
        <use xlink:href="#place" y="194" x="90" data-row="1" data-place="1" fill="#969696"/>
        <use xlink:href="#place" y="194" x="117" data-row="1" data-place="2" fill="#969696"/>
        <use xlink:href="#place" y="194" x="144" data-row="1" data-place="3" fill="#969696"/>
        <use xlink:href="#place" y="194" x="171" data-row="1" data-place="4" fill="#969696"/>
        <use xlink:href="#place" y="194" x="198" data-row="1" data-place="5" fill="#969696"/>
        <use xlink:href="#place" y="194" x="225" data-row="1" data-place="6" fill="#969696"/>
        <use xlink:href="#place" y="194" x="252" data-row="1" data-place="7" fill="#969696"/>
        <use xlink:href="#place" y="194" x="279" data-row="1" data-place="8" fill="#969696"/>
        <use xlink:href="#place" y="194" x="306" data-row="1" data-place="9" fill="#969696"/>
        <use xlink:href="#place" y="194" x="333" data-row="1" data-place="10" fill="#969696"/>
        <use xlink:href="#place" y="194" x="360" data-row="1" data-place="11" fill="#969696"/>
        <use xlink:href="#place" y="194" x="387" data-row="1" data-place="12" fill="#969696"/>
        <use xlink:href="#place" y="194" x="414" data-row="1" data-place="13" fill="#969696"/>
        <use xlink:href="#place" y="194" x="441" data-row="1" data-place="14" fill="#969696"/>
        <use xlink:href="#place" y="194" x="468" data-row="1" data-place="15" fill="#969696"/>

        <use xlink:href="#place" y="217" x="90"  data-row="2" data-place="1" fill="#969696"/>
        <use xlink:href="#place" y="217" x="117" data-row="2" data-place="2" fill="#969696"/>
        <use xlink:href="#place" y="217" x="144" data-row="2" data-place="3" fill="#969696"/>
        <use xlink:href="#place" y="217" x="171" data-row="2" data-place="4" fill="#969696"/>
        <use xlink:href="#place" y="217" x="198" data-row="2" data-place="5" fill="#969696"/>
        <use xlink:href="#place" y="217" x="225" data-row="2" data-place="6" fill="#969696"/>
        <use xlink:href="#place" y="217" x="252" data-row="2" data-place="7" fill="#969696"/>
        <use xlink:href="#place" y="217" x="279" data-row="2" data-place="8" fill="#969696"/>
        <use xlink:href="#place" y="217" x="306" data-row="2" data-place="9" fill="#969696"/>
        <use xlink:href="#place" y="217" x="333" data-row="2" data-place="10" fill="#969696"/>
        <use xlink:href="#place" y="217" x="360" data-row="2" data-place="11" fill="#969696"/>
        <use xlink:href="#place" y="217" x="387" data-row="2" data-place="12" fill="#969696"/>
        <use xlink:href="#place" y="217" x="414" data-row="2" data-place="13" fill="#969696"/>
        <use xlink:href="#place" y="217" x="441" data-row="2" data-place="14" fill="#969696"/>
        <use xlink:href="#place" y="217" x="468" data-row="2" data-place="15" fill="#969696"/>

        <use xlink:href="#place" y="240" x="90"  data-row="3" data-place="1" fill="#969696"/>
        <use xlink:href="#place" y="240" x="117" data-row="3" data-place="2" fill="#969696"/>
        <use xlink:href="#place" y="240" x="144" data-row="3" data-place="3" fill="#969696"/>
        <use xlink:href="#place" y="240" x="171" data-row="3" data-place="4" fill="#969696"/>
        <use xlink:href="#place" y="240" x="198" data-row="3" data-place="5" fill="#969696"/>
        <use xlink:href="#place" y="240" x="225" data-row="3" data-place="6" fill="#969696"/>
        <use xlink:href="#place" y="240" x="252" data-row="3" data-place="7" fill="#969696"/>
        <use xlink:href="#place" y="240" x="279" data-row="3" data-place="8" fill="#969696"/>
        <use xlink:href="#place" y="240" x="306" data-row="3" data-place="9" fill="#969696"/>
        <use xlink:href="#place" y="240" x="333" data-row="3" data-place="10" fill="#969696"/>
        <use xlink:href="#place" y="240" x="360" data-row="3" data-place="11" fill="#969696"/>
        <use xlink:href="#place" y="240" x="387" data-row="3" data-place="12" fill="#969696"/>
        <use xlink:href="#place" y="240" x="414" data-row="3" data-place="13" fill="#969696"/>
        <use xlink:href="#place" y="240" x="441" data-row="3" data-place="14" fill="#969696"/>
        <use xlink:href="#place" y="240" x="468" data-row="3" data-place="15" fill="#969696"/>

        <use xlink:href="#place" y="263" x="90"  data-row="4" data-place="1" fill="#969696"/>
        <use xlink:href="#place" y="263" x="117" data-row="4" data-place="2" fill="#969696"/>
        <use xlink:href="#place" y="263" x="144" data-row="4" data-place="3" fill="#969696"/>
        <use xlink:href="#place" y="263" x="171" data-row="4" data-place="4" fill="#858585"/>
        <use xlink:href="#place" y="263" x="198" data-row="4" data-place="5" fill="#858585"/>
        <use xlink:href="#place" y="263" x="225" data-row="4" data-place="6" fill="#858585"/>
        <use xlink:href="#place" y="263" x="252" data-row="4" data-place="7" fill="#858585"/>
        <use xlink:href="#place" y="263" x="279" data-row="4" data-place="8" fill="#858585"/>
        <use xlink:href="#place" y="263" x="306" data-row="4" data-place="9" fill="#858585"/>
        <use xlink:href="#place" y="263" x="333" data-row="4" data-place="10" fill="#858585"/>
        <use xlink:href="#place" y="263" x="360" data-row="4" data-place="11" fill="#858585"/>
        <use xlink:href="#place" y="263" x="387" data-row="4" data-place="12" fill="#858585"/>
        <use xlink:href="#place" y="263" x="414" data-row="4" data-place="13" fill="#969696"/>
        <use xlink:href="#place" y="263" x="441" data-row="4" data-place="14" fill="#969696"/>
        <use xlink:href="#place" y="263" x="468" data-row="4" data-place="15" fill="#969696"/>

        <use xlink:href="#place" y="286" x="90"  data-row="5" data-place="1" fill="#969696"/>
        <use xlink:href="#place" y="286" x="117" data-row="5" data-place="2" fill="#969696"/>
        <use xlink:href="#place" y="286" x="144" data-row="5" data-place="3" fill="#969696"/>
        <use xlink:href="#place" y="286" x="171" data-row="5" data-place="4" fill="#858585"/>
        <use xlink:href="#place" y="286" x="198" data-row="5" data-place="5" fill="#858585"/>
        <use xlink:href="#place" y="286" x="225" data-row="5" data-place="6" fill="#858585"/>
        <use xlink:href="#place" y="286" x="252" data-row="5" data-place="7" fill="#858585"/>
        <use xlink:href="#place" y="286" x="279" data-row="5" data-place="8" fill="#858585"/>
        <use xlink:href="#place" y="286" x="306" data-row="5" data-place="9" fill="#858585"/>
        <use xlink:href="#place" y="286" x="333" data-row="5" data-place="10" fill="#858585"/>
        <use xlink:href="#place" y="286" x="360" data-row="5" data-place="11" fill="#858585"/>
        <use xlink:href="#place" y="286" x="387" data-row="5" data-place="12" fill="#858585"/>
        <use xlink:href="#place" y="286" x="414" data-row="5" data-place="13" fill="#969696"/>
        <use xlink:href="#place" y="286" x="441" data-row="5" data-place="14" fill="#969696"/>
        <use xlink:href="#place" y="286" x="468" data-row="5" data-place="15" fill="#969696"/>

        <use xlink:href="#place" y="309" x="90"  data-row="6" data-place="1" fill="#969696"/>
        <use xlink:href="#place" y="309" x="117" data-row="6" data-place="2" fill="#969696"/>
        <use xlink:href="#place" y="309" x="144" data-row="6" data-place="3" fill="#969696"/>
        <use xlink:href="#place" y="309" x="171" data-row="6" data-place="4" fill="#858585"/>
        <use xlink:href="#place" y="309" x="198" data-row="6" data-place="5" fill="#858585"/>
        <use xlink:href="#place" y="309" x="225" data-row="6" data-place="6" fill="#858585"/>
        <use xlink:href="#place" y="309" x="252" data-row="6" data-place="7" fill="#858585"/>
        <use xlink:href="#place" y="309" x="279" data-row="6" data-place="8" fill="#858585"/>
        <use xlink:href="#place" y="309" x="306" data-row="6" data-place="9" fill="#858585"/>
        <use xlink:href="#place" y="309" x="333" data-row="6" data-place="10" fill="#858585"/>
        <use xlink:href="#place" y="309" x="360" data-row="6" data-place="11" fill="#858585"/>
        <use xlink:href="#place" y="309" x="387" data-row="6" data-place="12" fill="#858585"/>
        <use xlink:href="#place" y="309" x="414" data-row="6" data-place="13" fill="#969696"/>
        <use xlink:href="#place" y="309" x="441" data-row="6" data-place="14" fill="#969696"/>
        <use xlink:href="#place" y="309" x="468" data-row="6" data-place="15" fill="#969696"/>

        <use xlink:href="#place" y="332" x="90"  data-row="7" data-place="1" fill="#969696"/>
        <use xlink:href="#place" y="332" x="117" data-row="7" data-place="2" fill="#969696"/>
        <use xlink:href="#place" y="332" x="144" data-row="7" data-place="3" fill="#969696"/>
        <use xlink:href="#place" y="332" x="171" data-row="7" data-place="4" fill="#858585"/>
        <use xlink:href="#place" y="332" x="198" data-row="7" data-place="5" fill="#858585"/>
        <use xlink:href="#place" y="332" x="225" data-row="7" data-place="6" fill="#858585"/>
        <use xlink:href="#place" y="332" x="252" data-row="7" data-place="7" fill="#858585"/>
        <use xlink:href="#place" y="332" x="279" data-row="7" data-place="8" fill="#858585"/>
        <use xlink:href="#place" y="332" x="306" data-row="7" data-place="9" fill="#858585"/>
        <use xlink:href="#place" y="332" x="333" data-row="7" data-place="10" fill="#858585"/>
        <use xlink:href="#place" y="332" x="360" data-row="7" data-place="11" fill="#858585"/>
        <use xlink:href="#place" y="332" x="387" data-row="7" data-place="12" fill="#858585"/>
        <use xlink:href="#place" y="332" x="414" data-row="7" data-place="13" fill="#969696"/>
        <use xlink:href="#place" y="332" x="441" data-row="7" data-place="14" fill="#969696"/>
        <use xlink:href="#place" y="332" x="468" data-row="7" data-place="15" fill="#969696"/>

        <use xlink:href="#place" y="355" x="90"  data-row="8" data-place="1" fill="#969696"/>
        <use xlink:href="#place" y="355" x="117" data-row="8" data-place="2" fill="#969696"/>
        <use xlink:href="#place" y="355" x="144" data-row="8" data-place="3" fill="#969696"/>
        <use xlink:href="#place" y="355" x="171" data-row="8" data-place="4" fill="#858585"/>
        <use xlink:href="#place" y="355" x="198" data-row="8" data-place="5" fill="#858585"/>
        <use xlink:href="#place" y="355" x="225" data-row="8" data-place="6" fill="#858585"/>
        <use xlink:href="#place" y="355" x="252" data-row="8" data-place="7" fill="#858585"/>
        <use xlink:href="#place" y="355" x="279" data-row="8" data-place="8" fill="#858585"/>
        <use xlink:href="#place" y="355" x="306" data-row="8" data-place="9" fill="#858585"/>
        <use xlink:href="#place" y="355" x="333" data-row="8" data-place="10" fill="#858585"/>
        <use xlink:href="#place" y="355" x="360" data-row="8" data-place="11" fill="#858585"/>
        <use xlink:href="#place" y="355" x="387" data-row="8" data-place="12" fill="#858585"/>
        <use xlink:href="#place" y="355" x="414" data-row="8" data-place="13" fill="#969696"/>
        <use xlink:href="#place" y="355" x="441" data-row="8" data-place="14" fill="#969696"/>
        <use xlink:href="#place" y="355" x="468" data-row="8" data-place="15" fill="#969696"/>

        <use xlink:href="#place" y="398" x="57"  data-row="9" data-place="1" fill="#737373"/>
        <use xlink:href="#place" y="398" x="94"  data-row="9" data-place="2" fill="#737373"/>
        <use xlink:href="#place" y="398" x="131" data-row="9" data-place="3" fill="#737373"/>
        <use xlink:href="#place" y="398" x="168" data-row="9" data-place="4" fill="#737373"/>
        <use xlink:href="#place" y="398" x="205" data-row="9" data-place="5" fill="#737373"/>
        <use xlink:href="#place" y="398" x="242" data-row="9" data-place="6" fill="#737373"/>
        <use xlink:href="#place" y="398" x="279" data-row="9" data-place="7" fill="#737373"/>
        <use xlink:href="#place" y="398" x="316" data-row="9" data-place="8" fill="#737373"/>
        <use xlink:href="#place" y="398" x="353" data-row="9" data-place="9" fill="#737373"/>
        <use xlink:href="#place" y="398" x="390" data-row="9" data-place="10" fill="#737373"/>
        <use xlink:href="#place" y="398" x="427" data-row="9" data-place="11" fill="#737373"/>
        <use xlink:href="#place" y="398" x="464" data-row="9" data-place="12" fill="#737373"/>
        <use xlink:href="#place" y="398" x="501" data-row="9" data-place="13" fill="#737373"/>



          <line stroke="#000" stroke-linecap="null" stroke-linejoin="null" id="svg_134" y2="107.11458" x2="539.49999" y1="107.11458" x1="38.5" fill-opacity="null" stroke-opacity="null" fill="none"/>
          <text xml:space="preserve" text-anchor="start" font-family="'Palatino Linotype', 'Book Antiqua', Palatino, serif" font-size="24" id="svg_135" y="134.11458" x="256.5" fill-opacity="null" stroke-opacity="null" stroke-width="0" stroke="#000" fill="#000000">Screen</text>
          <rect stroke="#000" rx="4" id="svg_136" height="17" width="22" y="24.05729" x="196" fill-opacity="null" stroke-opacity="null" stroke-width="0" fill="#969696"/>
          <rect rx="4" id="svg_137" height="17" width="22" y="24.05729" x="330" stroke-opacity="null" stroke-width="0" fill="#737373" stroke="#000"/>
          <text font-weight="bold" xml:space="preserve" text-anchor="start" font-family="'Palatino Linotype', 'Book Antiqua', Palatino, serif" font-size="16" id="svg_138" y="38.55729" x="231" fill-opacity="null" stroke-opacity="null" stroke-width="0" stroke="#000" fill="#000000">80 ₴</text>
          <text font-weight="bold" xml:space="preserve" text-anchor="start" font-family="'Palatino Linotype', 'Book Antiqua', Palatino, serif" font-size="16" id="svg_139" y="38.55729" x="365" fill-opacity="null" stroke-opacity="null" stroke-width="0" stroke="#000" fill="#000000">160 ₴</text>
      </g>
    </svg>

<div id="output"></div>








    <br>


 </body>
</html>
