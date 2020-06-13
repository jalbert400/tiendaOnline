<div class="slider">
  <div id="slider-1" class="flexslider">
    <ul class="slides">
      <?php
      for ($i = 0; $i < 5; $i++) {
      ?>
        <li>
          <div class="img-fondo-min" style="height: 380px;background: transparent url('{{ url('images/productos/ball.jpg') }}') repeat scroll 0% 0%;"></div>
        </li>
      <?php
      }
      ?>
    </ul>
  </div>
  <div id="carousel" class="flexslider">
    <ul class="slides">
      <?php
      for ($i = 0; $i < 5; $i++) {
      ?>
        <li>
          <img src="{{ url('images/productos/ball.jpg') }}" />
        </li>
      <?php
      }
      ?>
    </ul>
  </div>
</div>
