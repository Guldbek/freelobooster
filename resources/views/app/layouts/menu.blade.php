<header class="header">
  <nav id="menu" class="navbar navbar-expand-lg navbar-light container-fluid fixed-top">
  <div class="container">
  <a class="navbar-brand brand-title mr-auto" href="#">FreeloBooster</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active text-center">
        <a class="nav-link white" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item text-center">
        <a class="nav-link white" href="#">Features</a>
      </li>
      <li class="nav-item text-center">
        <a class="nav-link white" href="#">Pricing</a>
      </li>

        @if(Auth::check())
        <hr class="white nav-item nav-link nav-divider mobile-divide">
        <p class="white nav-item nav-link nav-divider web-divide">|</p>
          <li class="nav-item dropdown text-center">
        <a class="nav-link white dropdown-toggle user" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{Auth::user()->name}}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Purchases</a>
          <a class="dropdown-item danger" href="#">Logout</a>
        </div>
        @else
        <p class="white nav-item nav-link nav-divider web-divide">|</p>
        <hr class="white nav-item nav-link nav-divider mobile-divide">
        <li class="nav-item">
          <a class="nav-link user-nav white text-center" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link user-nav white text-center" href="#">Login</a>
        </li>
        @endif


      </li>
    </ul>
  </div>

</div>
</nav>
</header>
<!-- @if(!Auth::check())
<p class="nav-divider ">|</p>
<li class="nav-item">
  <a class="nav-link user-nav" href="#">Register</a>
</li>
<li class="nav-item">
  <a class="nav-link user-nav" href="#">Login</a>
</li>
@else
<p class="nav-divider">|</p>
<div class="nav-item t dropdown show">
  <a class="nav-link dropdown-toggle user" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">
   {{Auth::user()->name}}</a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Settings</a>
    <a class="dropdown-item" href="#">Your orders</a>
    <a class="dropdown-item" href="#">Need help?</a>
    <a class="dropdown-item danger" href="#">Logout</a>
  </div>
</div>
@endif -->
