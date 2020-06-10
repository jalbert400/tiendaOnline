<div class="menu-carrito-card">
  <div class="menu-carrito-card--header px-4 py-3">
    <p><i class="fa fa-cart-plus" aria-hidden="true"></i><span class="px-2">Resumen de tu compra</span></p>
  </div>
  <div class="menu-carrito-card--body px-4">
    <div class="menu-carrito-body--header py-2">
      <div class="py-1">
        <p><b>Subtotal</b></p>
        <p>S/ 246.80</p>
      </div>
      <div class="py-1">
        <p><b>Descuento</b></p>
        <p>S/ 0.00</p>
      </div>
      <div class="py-1">
        <p><b>Costo de Envío</b></p>
        <p>NO DISPONIBLE</p>
      </div>
    </div>
    <div class="menu-carrito-body--main">
      <div class="py-3 menu-carrito-main-total">
        <p><b>Total</b></p>
        <p>S/ 400.00</p>
      </div>
      <p class="menu-carrito-main--descripcion py-2">Recuerda que recibirás tus productos en las fechas indicadas por la Tienda Oficial.</p>

      <div class="menu-carrito-body--cupon py-3">
        <p class="text-center py-2">Código Promocional</p>
        <form>
          <div class="form-row">
            <div class="form-group col col-md-6">
              <input type="text" class="form-control form-control-sm">
            </div>
            <div class="form-group col col-md-6">
              <input type="submit" value="Verificar" class="btn-submit-modal form-control-sm">
            </div>
          </div>
        </form>
      </div>
      <div class="text-center py-3">
        <a href="{{ url('/pedido-datos-entrega') }}">
          <input type="submit" value="Procesar Compra" class="btn-submit-modal form-control-sm">
        </a>
      </div>
      <div class="menu-carrito-card--footer px-4 py-2">
        <p class="text-center">
          <span class="px-2">El modo de envío y forma de pago se seleccionará luego </span>
        </p>
      </div>
    </div>
  </div>
</div>
