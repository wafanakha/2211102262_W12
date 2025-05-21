<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{ route('home') }}">Katalog</a>
  <div class="collapse navbar-collapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item"><a class="nav-link" href="{{ route('katalog') }}">Katalog</a></li>
    </ul>
    <ul class="navbar-nav ml-auto">
      @guest
        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Signup</a></li>
      @else
        <li class="nav-item"><a class="nav-link" href="#">{{ Auth::user()->name }}</a></li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}"
             onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
              @csrf
          </form>
        </li>
      @endguest
    </ul>
  </div>
</nav>
