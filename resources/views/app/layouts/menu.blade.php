<header>
  <div id="menu" class="container-fluid fixed-top">
    <div class="container">
      <div class="row">
        <div class="col col-md-4">
              <h1>Freeloboost</h1>
        </div>
        <div class="col offset-md-2 col-md-6">
          <ul class="nav justify-content-end">
            <li class="nav-item">
              <a class="nav-link active" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Boost</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact us</a>
            </li>
            @if(!Auth::check())
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
            @endif
          </ul>
        </div>
      </div>
    </div>
  </div>
</header>
