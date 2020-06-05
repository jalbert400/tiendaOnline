<nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
            </a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
            </a>
        </li>

    </ul>

    <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
            </button>
            </div>
        </div>
    </form>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link m-0 p-0 d-flex align-items-center" data-toggle="dropdown" href="#" >
                <div class="media media align-items-center">
                    <img src="{{ url('images') }}/user8-128x128.jpg" alt="User Avatar" class="img-size-32 img-circle mr-2">
                    <div class="media-body">
                        <p class="dropdown-item-title d-flex align-items-center">
                            {{ Auth()->user()->nombre }}  
                            <span class="float-right text-sm text-success ml-1"><i class="fa fa-circle-o"></i></span>
                        </p>
                    </div>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right bg-light">
                <span class="dropdown-item dropdown-header">OPCIONES:</span>
                <div class="dropdown-divider"></div>
                <a href="" class="dropdown-item">
                    <i class="fa fa-user mr-2" aria-hidden="true"></i> Perfil
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ route('modulo.login.logout') }}" class="dropdown-item" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out mr-2" aria-hidden="true"></i>
                    <form id="logout-form" action="{{ route('modulo.login.logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form> Cerrar Sesión
                </a>
            </div>
        </li>
    </ul>

</nav>