<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Test TiendApp</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="nav-pills navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link {{ setActive('/') }}" href="/">@lang('Home')</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ setActive('marca') }}" href="/marca">Marca</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ setActive('producto') }}" href="/producto">Producto</a>
        </li>
      </ul>

    </div>
  </div>
</nav>
