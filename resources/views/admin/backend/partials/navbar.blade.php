<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Quejate Ya!!!</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Secciones
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('admin.posts.index') }}">Articulos</a>
          <a class="dropdown-item" href="{{ route('admin.categories.index') }}">Categorias</a>
          <a class="dropdown-item" href="{{ route('admin.cities.index') }}">Ciudades</a>
          <a class="dropdown-item" href="{{ route('admin.comments.index') }}">Comentarios</a>
          <a class="dropdown-item" href="{{ route('admin.countries.index') }}">Paises</a>
          <a class="dropdown-item" href="{{ route('admin.priorities.index') }}">Prioridades</a>
          <a class="dropdown-item" href="{{ route('admin.tags.index') }}">Tags</a>
          <a class="dropdown-item" href="{{ route('admin.valuations.index') }}">Valoraciones</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Mapa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sobre Nosotros</a>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Busqueda</button>
    </form>
  </div>
</nav>
