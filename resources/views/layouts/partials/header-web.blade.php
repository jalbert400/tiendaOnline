<header>

  <section class="container">

    <div class="header__contact row hidden-ms background-seccion">
      <div class="col text-right">
        <ul class="header__contact-items py-2">
          <li class="mx-2 margin-right-0">
            <i class="fa fa-whatsapp" aria-hidden="true"></i> 968-486-533
          </li>
          <li class="mx-2 margin-right-0">
            <i class="fa fa-phone" aria-hidden="true"></i> (01) 467-3333
          </li>
          <li class="mx-2 margin-right-0 position-relative dropdown__cuenta-menu">
            <a class="dropdown__cuenta-menu-icon" href="{{ url('/') }}cuenta" data-toggle="modal" data-target=".modal-iniciar-sesion" id="login">
              <i class="fa fa-user-circle-o" aria-hidden="true"></i>
              Ingresar
            </a>
            <ul class="dropdown__cuenta-menu--list">
              <li class="py-1">
                <a href="{{ url('/') }}cuenta-datos-personales">
                  <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                  <span class="px-1">
                    Mis Datos Personales
                  </span>
                </a>
              </li>
              <li class="py-1">
                <a href="{{ url('/') }}cuenta-cambiar-password">
                  <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                  <span class="px-1">
                    Cambiar mi Password
                  </span>
                </a>
              </li>
              <li class="py-1">
                <a href="{{ url('/') }}cuenta-historial-compras">
                  <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                  <span class="px-1">
                    Historial de Pedidos
                  </span>
                </a>
              </li>
              <li class="py-1">
                <a href="{{ url('/') }}cupones-descuento">
                  <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                  <span class="px-1">
                    Cupones de Descuento
                  </span>
                </a>
              </li>
              <li class="py-1 py-2 dropdown-menu-item-icon">
                <a href="{{ url('/') }}">
                  <span class="py-2">
                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                    Salir
                  </span>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>

    <div class="header__wrapper row py-3 background-seccion">
      <div class="col-3 text-left header__wrapper--menu hidden-md-min">
        <input type="checkbox" id="side" class="d-none">
        <div>
          <div>
            <label for="side" data-pushbar-target="left" class="toggle">☰</label>
          </div>
          <!-- INICIO MENU -->
          <aside data-pushbar-id="left" data-pushbar-direction="left" class="scroollbar-menu background-white">
            <div class="header__wrapper--menu-login">
              <a data-toggle="modal" data-target=".modal-iniciar-sesion" id="login">
                <div>
                  <h4 class="text-center">
                    <img src="{{ url('images/icons') }}/user-registrar.png">
                    <span class="px-2">Ingresar / Registrar</span></h4>
                </div>
              </a>
            </div>
            <div class="header__wrapper--menu-categorias">
              <p class="py-1 header__wrapper--menu-categorias-titulo">Categorias</p>
              <div id="accordionMenuHeader" class="accordion">
                <!-- Accordion item 1 -->
                <div class="card">
                  <div id="headingOne" class="card-content bg-white shadow-sm border-0">
                    <h6 class="mb-0"><a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="d-block position-relative text-dark text-uppercase collapsible-link py-2">Perros</a></h6>
                  </div>
                  <div id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionMenuHeader" class="collapse show">
                    <div class="card-body">
                      <ul class="card-submenu">
                        <li><a href="{{ url('/') }}sub-categorias">Alimentacion</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">Snacks y Huesos</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">Juguetes</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">Paseo</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">En Casa</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">Transporte y Viaje</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">Entretenimiento</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">Antiparasitarios</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">Peluquería e Higiene</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">Vitaminas y Suplementos</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- Accordion item 2 -->
                <div class="card">
                  <div id="headingTwo" class="card-content bg-white shadow-sm border-0">
                    <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="d-block position-relative collapsed text-dark text-uppercase collapsible-link py-2">Gatos</a></h6>
                  </div>
                  <div id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionMenuHeader" class="collapse">
                    <div class="card-body">
                      <ul class="card-submenu">
                        <li><a href="{{ url('/') }}sub-categorias">Alimentacion</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">Snacks y Huesos</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">Juguetes</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">Paseo</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">En Casa</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">Transporte y Viaje</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">Entretenimiento</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">Antiparasitarios</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">Peluquería e Higiene</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">Vitaminas y Suplementos</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- Accordion item 3 -->
                <div class="card">
                  <div id="headingThree" class="card-content bg-white shadow-sm border-0">
                    <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="d-block position-relative collapsed text-dark text-uppercase collapsible-link py-2">Pajaros</a></h6>
                  </div>
                  <div id="collapseThree" aria-labelledby="headingThree" data-parent="#accordionMenuHeader" class="collapse">
                    <div class="card-body">
                      <ul class="card-submenu">
                        <li><a href="{{ url('/') }}sub-categorias">Alimentacion</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">Snacks y Huesos</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">Juguetes</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">Paseo</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">En Casa</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">Transporte y Viaje</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">Entretenimiento</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">Antiparasitarios</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">Peluquería e Higiene</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">Vitaminas y Suplementos</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- Accordion item 4 -->
                <div class="card">
                  <div id="headingFor" class="card-content bg-white shadow-sm border-0">
                    <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapseFor" aria-expanded="false" aria-controls="collapseThree" class="d-block position-relative collapsed text-dark text-uppercase collapsible-link py-2">Roedores</a></h6>
                  </div>
                  <div id="collapseFor" aria-labelledby="headingFor" data-parent="#accordionMenuHeader" class="collapse">
                    <div class="card-body">
                      <ul class="card-submenu">
                        <li><a href="{{ url('/') }}sub-categorias">Alimentacion</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">Snacks y Huesos</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">Juguetes</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">Paseo</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">En Casa</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">Transporte y Viaje</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">Entretenimiento</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">Antiparasitarios</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">Peluquería e Higiene</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">Vitaminas y Suplementos</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- Accordion item 5 -->
                <div class="card">
                  <div id="headingFive" class="card-content bg-white shadow-sm border-0">
                    <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree" class="d-block position-relative collapsed text-dark text-uppercase collapsible-link py-2">Peces</a></h6>
                  </div>
                  <div id="collapseFive" aria-labelledby="headingFive" data-parent="#accordionMenuHeader" class="collapse">
                    <div class="card-body">
                      <ul class="card-submenu">
                        <li><a href="{{ url('/') }}sub-categorias">Alimentacion</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">Snacks y Huesos</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">Juguetes</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">Paseo</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">En Casa</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">Transporte y Viaje</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">Entretenimiento</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">Antiparasitarios</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">Peluquería e Higiene</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">Vitaminas y Suplementos</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- Accordion item 6 -->
                <div class="card">
                  <div id="headingSix" class="card-content bg-white shadow-sm border-0">
                    <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseThree" class="d-block position-relative collapsed text-dark text-uppercase collapsible-link py-2">Reptiles</a></h6>
                  </div>
                  <div id="collapseSix" aria-labelledby="headingSix" data-parent="#accordionMenuHeader" class="collapse">
                    <div class="card-body">
                      <ul class="card-submenu">
                        <li><a href="{{ url('/') }}productos">Alimentacion</a></li>
                        <li><a href="{{ url('/') }}productos">Snacks y Huesos</a></li>
                        <li><a href="{{ url('/') }}productos">Juguetes</a></li>
                        <li><a href="{{ url('/') }}productos">Paseo</a></li>
                        <li><a href="{{ url('/') }}productos">En Casa</a></li>
                        <li><a href="{{ url('/') }}productos">Transporte y Viaje</a></li>
                        <li><a href="{{ url('/') }}productos">Entretenimiento</a></li>
                        <li><a href="{{ url('/') }}productos">Antiparasitarios</a></li>
                        <li><a href="{{ url('/') }}productos">Peluquería e Higiene</a></li>
                        <li><a href="{{ url('/') }}productos">Vitaminas y Suplementos</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- Accordion item 7 -->
                <div class="card">
                  <div id="headingSeven" class="card-content bg-white shadow-sm border-0">
                    <h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseThree" class="d-block position-relative collapsed text-dark text-uppercase collapsible-link py-2">Caballos</a></h6>
                  </div>
                  <div id="collapseSeven" aria-labelledby="headingSeven" data-parent="#accordionMenuHeader" class="collapse">
                    <div class="card-body">
                      <ul class="card-submenu">
                        <li><a href="{{ url('/') }}sub-categorias">Alimentacion</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">Snacks y Huesos</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">Juguetes</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">Paseo</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">En Casa</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">Transporte y Viaje</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">Entretenimiento</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">Antiparasitarios</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">Peluquería e Higiene</a></li>
                        <li><a href="{{ url('/') }}sub-categorias">Vitaminas y Suplementos</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </aside>
          <!-- FIN MENU -->
        </div>
      </div>

      <div class="col-6 col-lg-3 header__wrapper--logo">
        <a href="{{ url('/') }}"><img src="{{ url('images/logos') }}/logo-top.jpeg"></a>
      </div>

      <div class="col-6 list-group justify-content-center align-items-center hidden-md">
        <div class="header__wrapper--buscador position-relative">
          <input type="text" name="btn_buscar" class="form-control" placeholder="Busca tu producto .::. ">
          <i class="fa fa-search" aria-hidden="true"></i>
        </div>
      </div>
      <div class="col-3 list-group justify-content-center align-items-end">
        <div class="header__wrapper--cesta position-relative px-4">
          <a href="{{ url('/') }}carrito">
            <span class="cesta-titulo px-2">Carrito</span>
            <span>
              <img src="{{ url('images/icons') }}/bolsa_compra.png">
            </span>
            <span class="cesta-cantidad">(5)</span>
          </a>
        </div>
      </div>
    </div>

    <div class="header__navbar row hidden-md">
      <div class="width-100">
        <ul class="header__navbar-menu nav position-relative">
          <li>
            <a href="{{ url('/') }}categorias">Perros </a>
            <div class="header__navbar-sub-menu">
              <div class="row no-row row-cols-md-5 row-cols-lg-5 justify-content-center py-3">
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Alimentacion</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Pieso</a></li>
                    <li><a href="{{ url('/') }}productos">Comida Húmeda</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Snacks y Huesos</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Huesos</a></li>
                    <li><a href="{{ url('/') }}productos">Galletas</a></li>
                    <li><a href="{{ url('/') }}productos">Snacks Dentales</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Juguetes</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Entretenimiento</a></li>
                    <li><a href="{{ url('/') }}productos">Educativos</a></li>
                    <li><a href="{{ url('/') }}productos">Mordedores y Dentales</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Paseo</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Bozales</a></li>
                    <li><a href="{{ url('/') }}productos">Collares</a></li>
                    <li><a href="{{ url('/') }}productos">Correas</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">En Casa</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Camas y Sofas</a></li>
                    <li><a href="{{ url('/') }}productos">Casetas</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Transporte y Viaje</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Bolsos y Mochilas</a></li>
                    <li><a href="{{ url('/') }}productos">Jaulas y Transportines</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Entretenimiento</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Clickers y Silbatos</a></li>
                    <li><a href="{{ url('/') }}productos">Arneses</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Antiparasitarios</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Collares antipulgas</a></li>
                    <li><a href="{{ url('/') }}productos">Antiparasitarios</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Peluquerias e Higiene</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Champus y Colonias</a></li>
                    <li><a href="{{ url('/') }}productos">Cepillos y Cortapelos</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Vitaminas y Suplemento</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Vitaminas</a></li>
                    <li><a href="{{ url('/') }}productos">Condroprotectores</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li>
            <a href="{{ url('/') }}categorias">Gatos </a>
            <div class="header__navbar-sub-menu">
              <div class="row no-row row-cols-md-5 row-cols-lg-5 justify-content-center py-3">
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Alimentacion</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Pieso</a></li>
                    <li><a href="{{ url('/') }}productos">Comida Húmeda</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Snacks y Complementos</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Jaleas Malta y Hierbas</a></li>
                    <li><a href="{{ url('/') }}productos">Premios y Recompensas</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Arena Higiénicas</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Areneros y bandejas</a></li>
                    <li><a href="{{ url('/') }}productos">Arenas Aglomerantes</a></li>
                    <li><a href="{{ url('/') }}productos">Arenas de Sílice</a></li>
                    <li><a href="{{ url('/') }}productos">Areneros Absorbentes</a></li>
                    <li><a href="{{ url('/') }}productos">Areneros Vegetales</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Juguetes</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Entretenimiento</a></li>
                    <li><a href="{{ url('/') }}productos">Rascadores</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Collares arneses y correas</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Arneses y Correas</a></li>
                    <li><a href="{{ url('/') }}productos">Collares</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">En Casa</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Camas y mantas</a></li>
                    <li><a href="{{ url('/') }}productos">Comederos y dispensadores</a></li>
                    <li><a href="{{ url('/') }}productos">Fuentes y bebederos</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Transporte y Viaje</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Mochilas y bolsas</a></li>
                    <li><a href="{{ url('/') }}productos">Transportines y Jaulas</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Comportamiento</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Repelentes</a></li>
                    <li><a href="{{ url('/') }}productos">Comportamiento y Feromonas</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Peluquerias e Higiene</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Champus y Colonias</a></li>
                    <li><a href="{{ url('/') }}productos">Cepillos y Cortapelos</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Vitaminas y Suplemento</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Vitaminas</a></li>
                    <li><a href="{{ url('/') }}productos">Condroprotectores</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li>
            <a href="{{ url('/') }}categorias">Pajaros </a>
            <div class="header__navbar-sub-menu">
              <div class="row no-row row-cols-md-5 row-cols-lg-5 justify-content-center py-3">
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Alimentacion</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Pieso</a></li>
                    <li><a href="{{ url('/') }}productos">Comida Húmeda</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Snacks y Huesos</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Huesos</a></li>
                    <li><a href="{{ url('/') }}productos">Galletas</a></li>
                    <li><a href="{{ url('/') }}productos">Snacks Dentales</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Juguetes</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Entretenimiento</a></li>
                    <li><a href="{{ url('/') }}productos">Educativos</a></li>
                    <li><a href="{{ url('/') }}productos">Mordedores y Dentales</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Paseo</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Bozales</a></li>
                    <li><a href="{{ url('/') }}productos">Collares</a></li>
                    <li><a href="{{ url('/') }}productos">Correas</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">En Casa</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Camas y Sofas</a></li>
                    <li><a href="{{ url('/') }}productos">Casetas</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Transporte y Viaje</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Bolsos y Mochilas</a></li>
                    <li><a href="{{ url('/') }}productos">Jaulas y Transportines</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Entretenimiento</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Clickers y Silbatos</a></li>
                    <li><a href="{{ url('/') }}productos">Arneses</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Antiparasitarios</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Collares antipulgas</a></li>
                    <li><a href="{{ url('/') }}productos">Antiparasitarios</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Peluquerias e Higiene</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Champus y Colonias</a></li>
                    <li><a href="{{ url('/') }}productos">Cepillos y Cortapelos</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Vitaminas y Suplemento</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Vitaminas</a></li>
                    <li><a href="{{ url('/') }}productos">Condroprotectores</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li>
            <a href="{{ url('/') }}categorias">Roedores </a>
            <div class="header__navbar-sub-menu">
              <div class="row no-row row-cols-md-5 row-cols-lg-5 justify-content-center py-3">
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Alimentacion</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Pieso</a></li>
                    <li><a href="{{ url('/') }}productos">Comida Húmeda</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Snacks y Huesos</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Huesos</a></li>
                    <li><a href="{{ url('/') }}productos">Galletas</a></li>
                    <li><a href="{{ url('/') }}productos">Snacks Dentales</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Juguetes</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Entretenimiento</a></li>
                    <li><a href="{{ url('/') }}productos">Educativos</a></li>
                    <li><a href="{{ url('/') }}productos">Mordedores y Dentales</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Paseo</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Bozales</a></li>
                    <li><a href="{{ url('/') }}productos">Collares</a></li>
                    <li><a href="{{ url('/') }}productos">Correas</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">En Casa</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Camas y Sofas</a></li>
                    <li><a href="{{ url('/') }}productos">Casetas</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Transporte y Viaje</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Bolsos y Mochilas</a></li>
                    <li><a href="{{ url('/') }}productos">Jaulas y Transportines</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Entretenimiento</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Clickers y Silbatos</a></li>
                    <li><a href="{{ url('/') }}productos">Arneses</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Antiparasitarios</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Collares antipulgas</a></li>
                    <li><a href="{{ url('/') }}productos">Antiparasitarios</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Peluquerias e Higiene</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Champus y Colonias</a></li>
                    <li><a href="{{ url('/') }}productos">Cepillos y Cortapelos</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Vitaminas y Suplemento</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Vitaminas</a></li>
                    <li><a href="{{ url('/') }}productos">Condroprotectores</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li>
            <a href="{{ url('/') }}categorias">Peces </a>
            <div class="header__navbar-sub-menu">
              <div class="row no-row row-cols-md-5 row-cols-lg-5 justify-content-center py-3">
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Alimentacion</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Pieso</a></li>
                    <li><a href="{{ url('/') }}productos">Comida Húmeda</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Snacks y Huesos</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Huesos</a></li>
                    <li><a href="{{ url('/') }}productos">Galletas</a></li>
                    <li><a href="{{ url('/') }}productos">Snacks Dentales</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Juguetes</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Entretenimiento</a></li>
                    <li><a href="{{ url('/') }}productos">Educativos</a></li>
                    <li><a href="{{ url('/') }}productos">Mordedores y Dentales</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Paseo</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Bozales</a></li>
                    <li><a href="{{ url('/') }}productos">Collares</a></li>
                    <li><a href="{{ url('/') }}productos">Correas</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">En Casa</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Camas y Sofas</a></li>
                    <li><a href="{{ url('/') }}productos">Casetas</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Transporte y Viaje</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Bolsos y Mochilas</a></li>
                    <li><a href="{{ url('/') }}productos">Jaulas y Transportines</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Entretenimiento</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Clickers y Silbatos</a></li>
                    <li><a href="{{ url('/') }}productos">Arneses</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Antiparasitarios</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Collares antipulgas</a></li>
                    <li><a href="{{ url('/') }}productos">Antiparasitarios</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Peluquerias e Higiene</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Champus y Colonias</a></li>
                    <li><a href="{{ url('/') }}productos">Cepillos y Cortapelos</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Vitaminas y Suplemento</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Vitaminas</a></li>
                    <li><a href="{{ url('/') }}productos">Condroprotectores</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li>
            <a href="{{ url('/') }}categorias">Reptiles </a>
            <div class="header__navbar-sub-menu">
              <div class="row no-row row-cols-md-5 row-cols-lg-5 justify-content-center py-3">
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Alimentacion</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Pieso</a></li>
                    <li><a href="{{ url('/') }}productos">Comida Húmeda</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Snacks y Huesos</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Huesos</a></li>
                    <li><a href="{{ url('/') }}productos">Galletas</a></li>
                    <li><a href="{{ url('/') }}productos">Snacks Dentales</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Juguetes</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Entretenimiento</a></li>
                    <li><a href="{{ url('/') }}productos">Educativos</a></li>
                    <li><a href="{{ url('/') }}productos">Mordedores y Dentales</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Paseo</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Bozales</a></li>
                    <li><a href="{{ url('/') }}productos">Collares</a></li>
                    <li><a href="{{ url('/') }}productos">Correas</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">En Casa</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Camas y Sofas</a></li>
                    <li><a href="{{ url('/') }}productos">Casetas</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Transporte y Viaje</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Bolsos y Mochilas</a></li>
                    <li><a href="{{ url('/') }}productos">Jaulas y Transportines</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Entretenimiento</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Clickers y Silbatos</a></li>
                    <li><a href="{{ url('/') }}productos">Arneses</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Antiparasitarios</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Collares antipulgas</a></li>
                    <li><a href="{{ url('/') }}productos">Antiparasitarios</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Peluquerias e Higiene</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Champus y Colonias</a></li>
                    <li><a href="{{ url('/') }}productos">Cepillos y Cortapelos</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Vitaminas y Suplemento</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Vitaminas</a></li>
                    <li><a href="{{ url('/') }}productos">Condroprotectores</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li>
            <a href="{{ url('/') }}categorias">Caballos </a>
            <div class="header__navbar-sub-menu">
              <div class="row no-row row-cols-md-5 row-cols-lg-5 justify-content-center py-3">
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Alimentacion</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Pieso</a></li>
                    <li><a href="{{ url('/') }}productos">Comida Húmeda</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Snacks y Huesos</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Huesos</a></li>
                    <li><a href="{{ url('/') }}productos">Galletas</a></li>
                    <li><a href="{{ url('/') }}productos">Snacks Dentales</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Juguetes</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Entretenimiento</a></li>
                    <li><a href="{{ url('/') }}productos">Educativos</a></li>
                    <li><a href="{{ url('/') }}productos">Mordedores y Dentales</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Paseo</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Bozales</a></li>
                    <li><a href="{{ url('/') }}productos">Collares</a></li>
                    <li><a href="{{ url('/') }}productos">Correas</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">En Casa</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Camas y Sofas</a></li>
                    <li><a href="{{ url('/') }}productos">Casetas</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Transporte y Viaje</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Bolsos y Mochilas</a></li>
                    <li><a href="{{ url('/') }}productos">Jaulas y Transportines</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Entretenimiento</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Clickers y Silbatos</a></li>
                    <li><a href="{{ url('/') }}productos">Arneses</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Antiparasitarios</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Collares antipulgas</a></li>
                    <li><a href="{{ url('/') }}productos">Antiparasitarios</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Peluquerias e Higiene</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Champus y Colonias</a></li>
                    <li><a href="{{ url('/') }}productos">Cepillos y Cortapelos</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Vitaminas y Suplemento</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Vitaminas</a></li>
                    <li><a href="{{ url('/') }}productos">Condroprotectores</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li>
            <a href="{{ url('/') }}categorias">Servicios </a>
            <div class="header__navbar-sub-menu">
              <div class="row no-row row-cols-md-5 row-cols-lg-5 justify-content-center py-3">
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Alimentacion</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Pieso</a></li>
                    <li><a href="{{ url('/') }}productos">Comida Húmeda</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Snacks y Huesos</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Huesos</a></li>
                    <li><a href="{{ url('/') }}productos">Galletas</a></li>
                    <li><a href="{{ url('/') }}productos">Snacks Dentales</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Juguetes</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Entretenimiento</a></li>
                    <li><a href="{{ url('/') }}productos">Educativos</a></li>
                    <li><a href="{{ url('/') }}productos">Mordedores y Dentales</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Paseo</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Bozales</a></li>
                    <li><a href="{{ url('/') }}productos">Collares</a></li>
                    <li><a href="{{ url('/') }}productos">Correas</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">En Casa</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Camas y Sofas</a></li>
                    <li><a href="{{ url('/') }}productos">Casetas</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Transporte y Viaje</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Bolsos y Mochilas</a></li>
                    <li><a href="{{ url('/') }}productos">Jaulas y Transportines</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Entretenimiento</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Clickers y Silbatos</a></li>
                    <li><a href="{{ url('/') }}productos">Arneses</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Antiparasitarios</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Collares antipulgas</a></li>
                    <li><a href="{{ url('/') }}productos">Antiparasitarios</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Peluquerias e Higiene</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Champus y Colonias</a></li>
                    <li><a href="{{ url('/') }}productos">Cepillos y Cortapelos</a></li>
                  </ul>
                </div>
                <div class="col py-3">
                  <p class="header__navbar-sub-menu--titulo text-left"><a href="{{ url('/') }}sub-categorias">Vitaminas y Suplemento</a></p>
                  <ul class="text-left">
                    <li><a href="{{ url('/') }}productos">Vitaminas</a></li>
                    <li><a href="{{ url('/') }}productos">Condroprotectores</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>

  </section>

</header>
