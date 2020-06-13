<footer class="main-footer">

  <section class="container footer__container py-6 background-seccion">

    <div class="footer__centro">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4 footer__centro--categorias">
        <div class="col">
          <h6><b>CONTACTO</b></h6>
          <ul class="listado__items">
            <li class="d-flex py-1">
              <span><i class="fa fa-whatsapp" aria-hidden="true"></i></span>
              <p class="px-2"> 968-486-533</p>
            </li>
            <li class="d-flex py-1">
              <span><i class="fa fa-phone" aria-hidden="true"></i></span>
              <p class="px-2"> (01) 467-3333</p>
            </li>
            <li class="d-flex py-1">
              <span><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
              <p class="px-2">
                <a href="mailto:contacto@gtsgroup.com.pe">contacto@gtsgroup.com.pe</a>
              </p>
            </li>
            <li class="d-flex py-1">
              <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
              <p class="px-2">Av. Morro Solar 2542 Urb. Monterrico Sur, Surco</p>
            </li>
          </ul>
        </div>
        <div class="col">
          <h6><b>NUESTRA TIENDA</b></h6>
          <ul class="listado__items">
            <li class="py-1 py-1-no-top"><a href="{{ url('/') }}productos"><span>Servicios</span></a>
            </li>
            <li class="py-1 py-1-no-top"><a href="{{ url('/') }}contactanos"><span>Contáctenos</span></a></li>
          </ul>
        </div>
        <div class="col">
          <h6><b>SERVICIO AL CLIENTE</b></h6>
          <ul class="listado__items">
            <li class="py-1 py-1-no-top">
              <a href="{{ url('/servicio-cliente/quienes-somos') }}">
                <span>Quienes Somos</span>
              </a>
            </li>
            <li class="py-1 py-1-no-top">
              <a href="{{ url('/servicio-cliente/como-comprar') }}">
                <span>Cómo Comprar</span>
              </a>
            </li>
            <li class="py-1 py-1-no-top">
              <a href="{{ url('/servicio-cliente/devoluciones') }}">
                <span>Devoluciones</span>
              </a>
            </li>
            <li class="py-1 py-1-no-top">
              <a href="{{ url('/servicio-cliente/libro-reclamaciones') }}">
                <span>Libro de Reclamaciones</span>
              </a>
            </li>
            <li class="py-1 py-1-no-top">
              <a href="{{ url('/servicio-cliente/politica-privacidad') }}">
                <span>Política de Privacidad</span>
              </a>
            </li>
            <li class="py-1 py-1-no-top">
              <a href="{{ url('/servicio-cliente/preguntas-frecuentes') }}">
                <span>Preguntas Frecuentes</span>
              </a>
            </li>
            <li class="py-1 py-1-no-top">
              <a href="{{ url('/servicio-cliente/terminos-condiciones') }}">
                <span>Términos y Condiciones</span>
              </a>
            </li>
          </ul>
        </div>
        <div class="col">
          <h6><b>RECIBE NUESTRAS OFERTAS</b></h6>
          <div class="footer__boletin">
            <form name="form" id="form" method="post" action="{{ url('/') }}">
              <ul>
                <li class="py-1 py-1-no-top"><input name="boletin_nombre" id="boletin_nombre" type="text" class="form-control input-decorate" placeholder="Nombre .::. "> </li>
                <li class="py-1"><input name="boletin_email" id="boletin_email" type="text" class="form-control input-decorate" placeholder="Email .::. " onkeydown="intro_boletines(event, this.form)"></li>
                <li class="py-1"><input type="submit" class="btn-square-standard" value="ENVIAR"></li>
              </ul>
            </form>
          </div>
        </div>
      </div>
      <div class="py-4">
        <ul class="row justify-content-center redes_sociales">
          <li class="mx-2">
            <a href="https://es-la.facebook.com/" target="__NEW">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
          </li>
          <li class="mx-2">
            <a href="https://twitter.com/explore" target="__NEW">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
          </li>
          <li class="mx-2">
            <a href="https://es-la.facebook.com/" target="__NEW">
              <i class="fa fa-google-plus" aria-hidden="true"></i>
            </a>
          </li>
          <li class="mx-2">
            <a href="https://twitter.com/explore">
              <i class="fa fa-youtube" aria-hidden="true"></i>
            </a>
          </li>
        </ul>
      </div>
      <div class="row no-row row-cols-2 row-cols-sm-4 row-cols-md-6 justify-content-center py-4 footer__centro--icon-pagos">
        <div class="col text-center">
          <img title="Pago Contraentrega" src="{{ url('images/pagos') }}/pago_contraentrega.png" />
        </div>
        <div class="col text-center">
          <img title="Visa" src="{{ url('images/pagos') }}/visa.png" />
        </div>
        <div class="col text-center">
          <img title="Master Card" src="{{ url('images/pagos') }}/master_card.png" />
        </div>
        <div class="col text-center">
          <img title="American Express" src="{{ url('images/pagos') }}/american_express.png" />
        </div>
        <div class="col text-center">
          <img title="Dinners Club" src="{{ url('images/pagos') }}/dinners_club.png" />
        </div>
        <div class="col text-center">
          <img title="Depósito Online" src="{{ url('images/pagos') }}/deposito_online.png" />
        </div>
      </div>
    </div>

    <div class="footer__inferior">
      <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 footer__inferior--derechos py-1">
        <div class="col">© <?php echo date('Y') ?>.  - Todos los derechos reservados.</div>
        <div class="col text-sm-right">Desarrollado por <a href="https://gtsgroup.com.pe/web">Global Telecom Services</a></div>
      </div>
    </div>

  </section>

</footer>
