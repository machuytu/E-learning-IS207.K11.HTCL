<header id="site-header" class="header">
  <div id="header-wrap" class="border-nhut">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <!-- Navbar -->
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand logo" href="http://127.0.0.1:8000/dashboard">
              <img id="logo-img" class="img-center" src="{{asset('images/logo.png')}}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span></span>
              <span></span>
              <span></span>
            </button>

  <button type="button" class="btncustom btn btn-primary dropdown-toggle" data-toggle="dropdown">
    {{ $user->name }}
    <img src="{{ $user->avatar->getUrl() }}" class="userpicture1" width="35" height="35" role="presentation" aria-hidden="true " border-radius:20px;>
  </button>
  <div class="dropdown-menu2 dropdown-menu">
    @if (Auth::check())
        <a href="{{ route('logout') }}">Đăng xuất</a>
    @endif
  </div>
</div>



          </nav>
        </div>
      </div>
    </div>
  </div>
</header>
