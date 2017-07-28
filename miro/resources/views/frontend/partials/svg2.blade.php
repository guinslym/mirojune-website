<style>

/* take a bunch of the svg attributes and place them here for the sake of dryness */
path,
line {
  fill: none;
  stroke: #2a3745;
  stroke-width: 2;
  stroke-linecap: round;
  stroke-linejoin: round;
  stroke-miterlimit: 10;
  max-height: 100px;
}

/* give the vectors a dashed stroke */
.stroke-I {
  stroke-dasharray: 80;
  animation: write1 2s 1 ease-out;
}

.stroke-an {
  stroke-dasharray: 360;
  animation: write2 2s 1 ease-in-out;
}

.stroke-flourish {
  stroke-dasharray: 40;
  animation: write3 2s 1 ease-in;
}

/*  keyframes */
@keyframes write1 {
    0% {
        stroke-dashoffset: 80;
    }
    20% {
        stroke-dashoffset: 0;
    }
}

@keyframes write2 {
    0%, 25%  {
        stroke-dashoffset: 360;
    }
    90% {
        stroke-dashoffset: 0;
    }
}

@keyframes write3 {
    0%, 90% {
        stroke-dashoffset: 40;
    }
    100% {
        stroke-dashoffset: 0;
    }
}


</style>

<div class="container">
  <div class="row text-center ">


<svg id="signature" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
     x="0px" y="0px" viewBox="0 0 194 186" preserveAspectRatio="xMidYMid meet" >
<line class="stroke-I" x1="2.4" y1="2.1" x2="5.7" y2="77.1"/>
<path class="stroke-an" d="
    M11.5,37.7c-0.8,37.6,36.6,36.7,36.8,8.8c0.1-22.8-25.8-26.4-28.1-3.9c-2.4,23.3,28,27.8,29.9,0.5c-1,18.3,8.1,32.6,9.9-0.4
    c1.8-33,0.8,21.5,0.8,21.5S85.3-3.8,82.2,53c-2,36.9,13.7-2.3,13.7-2.3"/>
<line class="stroke-flourish" x1="88.6" y1="53.1" x2="128.1" y2="54.7"/>
</svg>


  </div>
</div>