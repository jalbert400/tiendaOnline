<aside class="main-sidebar sidebar-dark-primary elevation-4">
    
    <a href="{{ route('modulo.administrador.index') }}" class="brand-link">
        <img src="{{ url('images') }}/logos/icon.png" alt="{{ config('app.name', 'Sistema') }}" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">{{ config('app.name', 'Sistema') }}</span>
    </a>


    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            @auth
                <div class="image">
                    <img src="{{ url('images') }}/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div> 
                <div class="info">
                    <a href="" class="d-block">
                        {{ Auth()->user()->nombre}}  
                        <strong> ( admin ) </strong>
                        </a>
                </div> 
            @endauth
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                @if (isset($menus))
                    @forelse ($menus as $menu)
                        <li class="nav-item">
                            <a href="{{$menu->ruta}}" class="nav-link">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                                {{$menu->nombre}}
                                <i class="right fas fa-angle-right"></i>
                            </p>
                            </a>
                        </li>
                    @empty
                        <p>No hay Menú.</p>
                    @endforelse
                @endif
              
                <li class="nav-header">CONFIGURACIÓN</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-chart-pie"></i>
                    <p>
                        Usuarios
                        <i class="right fas fa-angle-right"></i>
                    </p>
                    </a>
                </li>
                
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-tree"></i>
                    <p>
                        UI Elements
                        <i class="fas fa-angle-right right"></i>
                    </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                        Forms
                        <i class="fas fa-angle-right right"></i>
                    </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-table"></i>
                    <p>
                        Tables
                        <i class="fas fa-angle-right right"></i>
                    </p>
                    </a>
                </li>
                <li class="nav-header">EXAMPLES</li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    <i class="nav-icon far fa-envelope"></i>
                    <p>
                        Mailbox
                        <i class="fas fa-angle-right right"></i>
                    </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        Pages
                        <i class="fas fa-angle-right right"></i>
                    </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    <i class="nav-icon far fa-plus-square"></i>
                    <p>
                        Extras
                        <i class="fas fa-angle-right right"></i>
                    </p>
                    </a>
                </li>
                
            </ul>
        </nav>

    </div>

  </aside>