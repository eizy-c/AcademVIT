 <!-- Sidebar -->
    <ul class="navbar-nav bg-sidebar sidebar sidebar-dark accordion" id="accordionSidebar">

      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('aula.index')}}">
        <div class="sidebar-brand-icon ">
          <img class="img-profile" style="width: 50px;" src="../img/logo.png">
        </div>
        <div class="sidebar-brand-text mx-3">AcademVIT</div>
      </a>

      <hr class="sidebar-divider my-0">

      @can('haveaccess','aula.index')
      <li class="nav-item {{ request()->is('aula*') ? 'active' : ''}}" >
        <a class="nav-link" href="{{route('aula.index')}}">
          <i class="fas fa-fw fa-university"></i>
          <span>Aulas</span></a>
      </li>
      @endcan

      @can('haveaccess','actividad.index')
      <li class="nav-item {{ request()->is('actividad*') ? 'active' : ''}}" >
        <a class="nav-link" href="{{route('actividad.index')}}">
          <i class="fas fa-fw fa-pen-square" aria-hidden="true"></i>
          <span>Actividades</span></a>
      </li>
      @endcan

      @can('haveaccess','role.index')
      <li class="nav-item {{ request()->is('role*') ? 'active' : ''}}" >
        <a class="nav-link" href="{{route('role.index')}}">
          <i class="fas fa-fw  fa-id-card"></i>
          <span>Roles</span></a>
      </li>
      @endcan

    </ul>