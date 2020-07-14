 <!-- navbar -->
        <nav class="navbar navbar-expand navbar-light bg-transparent topbar fixed-top">
          

          <ul class="navbar-nav mr-auto d-none" id="logo"> 
              <a class="d-flex align-items-center justify-content-center" href="/">
              <li class="nav-item" style="margin-right: 12px;">
                    <img class="img-profile" style="width: 50px;" src="{{ asset('img/logo.png') }}">
              </li>
              </a>
          </ul>

          <ul class="navbar-nav ml-auto"> 

         
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>

                <span class="badge badge-danger badge-counter">1</span> 
                
              </a>

              <div class="dropdown-list dropdown-menu dropdown-menu-right animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header text-white">
                  Notificaciones
                </h6>

                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div>
                    <div class="small text-gray-500">Hace 1 min</div>
                    <span class="font-weight-bold">Tienes una nueva actividad</span>
                  </div>
                </a>
                <p class="dropdown-item text-center small text-gray-500 mb-0">No tiene notificaciones . .</p>
              </div>
            </li>

            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="far fa-envelope fa-fw"></i>
              </a>

              <div class="dropdown-list dropdown-menu dropdown-menu-right animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Mensajes
                </h6>

                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                <p class="dropdown-item text-center small text-gray-500 mb-0">No tiene mensajes . .</p>
              </div>
            </li>

            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="{{ asset('img/user.png') }}">
              </a>

              <div class="dropdown-menu dropdown-menu-right animated--grow-in" aria-labelledby="userDropdown">
                <div class="dropdown-header ">{{ Auth::user()->name }}</div>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Perfil
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Configuraciones
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Actividad
                </a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logout">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Cerrar sesion
                </a>
              </div>
            </li>
            <li class="nav-item  mx-1 d-sm-none">
              <a class="nav-link boton-sidebar">
                <i class="fa fa-bars"></i>
              </a>
            </li>
          </ul>
          
        </nav>