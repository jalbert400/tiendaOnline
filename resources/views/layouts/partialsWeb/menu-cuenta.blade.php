<div class="menu-cuenta-card">
  <div class="menu-cuenta-card--header px-4 py-3">
    <p><i class="fa fa-user-circle-o opacity-7" aria-hidden="true"></i><span class="px-2">Jorge P.</span></p>
  </div>
  <div class="menu-cuenta-card--body  px-4 py-3">
    <ul>
      <li class="py-1">
        <a href="{{ url('/cuenta/mis-datos-personales') }}">
          <i class="fa fa-user cursor-pointer opacity-7" aria-hidden="true"></i>
          <span>Mis Datos Personales</span>
        </a>
      </li>
      <li class="py-1">
        <a href="{{ url('/cuenta/actualizar-password') }}">
          <i class="fa fa-lock cursor-pointer opacity-7" aria-hidden="true"></i>
          <span>Cambiar mi Password</span>
        </a>
      </li>
      <li class="py-1">
        <a href="{{ url('/cuenta/historial-pedidos') }}">
          <i class="fa fa-file-text-o cursor-pointer opacity-7" aria-hidden="true"></i>
          <span>Historial de Pedidos</span>
        </a>
      </li>
      <li class="py-1">
        <a href="{{ url('/cuenta/cupones-descuento') }}">
          <i class="fa fa-ticket cursor-pointer opacity-7" aria-hidden="true"></i>
          <span>Cupones de Descuento</span>
        </a>
      </li>
    </ul>
  </div>
  <div class="menu-cuenta-card--footer px-4 py-3">
    <p class="text-left">
      <a href="{{ url('/') }}">
        <i class="fa fa-power-off opacity-7" aria-hidden="true"></i>
        <span class="px-2">Cerrar Sesión</span>
      </a>
    </p>
  </div>
</div>
