<header>
<div class="container-fluid p-2 m-0 d-flex align-items-end justify-content-end boven-balk">

    <div class="dropdown">
        <button class="btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

        <i class="far fa-2x fa-id-card mr-4 text-white"></i>
        </button>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                <a class="dropdown-item" href="account">
                    {{ __('My Profile') }}
                </a>

                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
    </div>


    <div class="dropdown">
        <a class="btn" href="cart">
            <i class="fas fa-2x fa-shopping-cart mr-4 text-white"></i>
        </a>

    </div>
</div>
<div class="container-fluid p-0 m-0 header-image d-flex align-items-center justify-content-center">
    <img class="header-logo" src="images/template/logo.png">
</div>
<nav class="navbar navbar-expand-lg">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

    <i class="fa fa-bars text-white"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
      </ul>
    </div>
  </nav>
</header>
