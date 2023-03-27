<nav class="navbar navbar_1 navbar-dark bg-dark sticky-top">
    <div class="container-fluid ">
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="p-0 m-0 align-self-center">
        <span class="navbar-brand text-white mx-3" > <small>Max Alejandro Rivera Higuera</small> </span>
        <a class="navbar-brand NameBrandSub" href="{{route('index')}}"><img class="icon" src="https://lh3.googleusercontent.com/a/AEdFTp5X5iCdFoHOkPWD4CVvkM-BKaeKU-sQaJpLgApY=s288-p-rw-no" alt=""></a>
      </div>

      <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header">
          <h2 class="offcanvas-title" id="offcanvasDarkNavbarLabel">CineClub<br> <small><small> Admin </small></small> </h2>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('index')}}">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('cartelera')}}">Cartelera</a>
            </li>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('generos.Glista')}}">Generos </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('alumnos.lista')}}">Alumnos Inscritos </a>
            <li class="nav-item">
              <a class="nav-link" href="{{route('login')}}">Cerrar Sesión</a>
            </li>
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu dropdown-menu-dark">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li> -->
          </ul>
        </div>
      </div>
    </div>
  </nav>