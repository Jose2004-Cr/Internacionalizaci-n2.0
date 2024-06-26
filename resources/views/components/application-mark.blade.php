<br><div style="position: relative;">
    <img src="{{ asset('/images/logosinrotar.png') }}" alt="Camg" style="width: 80px; height: 80px;">
     <div style="position: absolute; top: 0; left: 0;">
         <img src="{{ asset('/images/logoquerota.png') }}" alt="rotacion" style="width: 80px; height: 80px; transform-origin: center center; animation: rotate 8s linear infinite;">
     </div>
 </div>


<canvas id="myCanvas" width="60" height="30"></canvas>

<style>
  @keyframes rotate {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
  }
</style>
