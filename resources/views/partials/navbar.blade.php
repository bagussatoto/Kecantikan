<nav class="navbar navbar-expand-lg navbar-light" style="background: #D0D7FF">
    <div class="container">
      <a class="navbar-brand" href="/"><img src="img/logo.jpg" alt="" class="img-thumbnail rounded-circle" width="50" ms-5> Satoto Cosmetic</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "about") ? 'active' : '' }}" href="/about">About</a>
          </li>
          @auth
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Welcome , {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="./dashboard-user"><i class="bi bi-window"></i> My Dasboard</a></li>  
                 <li><hr class="dropdown-divider"></li>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item">
                      <i class="bi bi-box-arrow-right"></i> Logout</a>
                  </button>
                </form>
              </ul>
          </li>
          
            @else
            <li class="nav-item">
              <a href="/login" class="nav-link {{ ($active === "login") ? 'active' : '' }}">Login</a>
            </li>
            <li class="nav-item">
              <a href="/register" class="nav-link {{ ($active === "register") ? 'active' : '' }}">Registrasi</a>
          </li>
          @endauth
      </ul>
             
        
      </div>
    </div>
  </nav>
