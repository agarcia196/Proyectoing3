 <div class="sidebar" data-color="azure" data-background-color="white" data-image="{{ asset('img/sidebar-3.jpg') }}">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="{{ route('index') }}" class="simple-text logo-normal">
          <img src="{{ asset('img/favicon.png') }}" style=" max-width: 90px; max-height: 64px">
       Wolf Society
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item @if ($item=='dashboard') active @endif ">
            <a class="nav-link" href="{{ route('index') }}">
              <i class="material-icons">home</i>
              <p>Noticias</p>
            </a>
          </li>
           <li class="nav-item @if ($item=='buscar') active @endif ">
            <a class="nav-link" href="{{ route('buscador') }}">
              <i class="material-icons">search</i>
              <p>Buscar</p>
            </a>
          </li>
          <li class="nav-item @if ($item=='ListaP') active @endif ">
            <a class="nav-link" href="{{ route('proyectos') }}">
              <i class="material-icons">content_paste</i>
              <p>Proyectos</p>
            </a>
          </li>
        </ul>
      </div>
    </div>