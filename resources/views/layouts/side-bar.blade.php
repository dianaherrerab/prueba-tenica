<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="sidebar-sticky pt-3">
      <ul class="nav flex-column">
        @if (@Auth::user()->hasRole('administrador'))
        <li class="nav-item">
            <a class="nav-link active" href="{{ route('usuarios.index') }}">
              <span data-feather="home"></span>
              Usuarios <span class="sr-only">(current)</span>
            </a>
        </li>
        @endif
        <li class="nav-item">
          <a class="nav-link" href="{{ route('clientes.index') }}">
            <span data-feather="file"></span>
            Clientes
          </a>
        </li>
      </ul>

      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Reportes</span>
        <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
          <span data-feather="plus-circle"></span>
        </a>
      </h6>
      <ul class="nav flex-column mb-2">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('reportes.index') }}">
            <span data-feather="file-text"></span>
            Generar reportes
          </a>
        </li>
      </ul>
    </div>
  </nav>