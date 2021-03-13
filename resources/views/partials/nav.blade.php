<nav class="navbar navbar-light navbar-expand-md bg-white shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">
      <img src="./img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="Logo Nutresa Spa">Nutresa Spa
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav nav-pills">
            <li class="nav-item">
              <a class="nav-link {{ setActive('home') }}" href="{{ route('home') }}">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ setActive('services') }}" href="{{ route('services') }}">Servicios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ setActive('about') }}" href="{{ route('about') }}">Quienes somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ setActive('contact') }}" href="{{ route('contact') }}">Contacto</a>
            </li>
          </ul>
        </div>
    </div>
</nav>
