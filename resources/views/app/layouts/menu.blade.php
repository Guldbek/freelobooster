<header class="header">
   <nav id="menu" class="navbar navbar-expand-lg navbar-light container-fluid fixed-top">
      <div class="container">
         <a class="navbar-brand brand-title mr-auto unselectable" draggable="false" (dragstart)="false;" href="/app"><img  draggable="false" (dragstart)="false;" class="img-fluid logo unselectable" src="{{ asset('images/logo.png') }}"/></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
               <li class="nav-item active text-center">
                  <a class="nav-link white" href="http://freelobooster.test/app">Home <span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item text-center">
                  <a class="nav-link white" href="http://freelobooster.test/app/about">About Us</a>
               </li>
               <li class="nav-item text-center">
                  <a class="nav-link white" href="http://freelobooster.test/app/boost">Price</a>
               </li>
               <!-- .. -->
               @if(Auth::check())
               <hr class="white nav-item nav-link nav-divider mobile-divide">
               <li class="white nav-item nav-link nav-divider web-divide">|</li>
               <li class="nav-item dropdown text-center">
                  <a class="nav-link white dropdown-toggle user" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{Auth::user()->name}}
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                     <a class="dropdown-item" href="#">Settings</a>
                     <a class="dropdown-item" href="#">Purchases</a>
                     <a class="dropdown-item danger" href="http://freelobooster.test/auth/login">Logout</a>
                  </div>
                  @else
               <li class="white nav-item nav-link nav-divider web-divide">|</li>
               <hr class="white nav-item nav-link nav-divider mobile-divide">
               <li class="nav-item">
                  <a class="nav-link user-nav white text-center" href="http://freelobooster.test/auth/register">Register</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link user-nav white text-center" href="http://freelobooster.test/auth/login">Login</a>
               </li>
               @endif
               <!-- .. -->
               </li>
            </ul>
         </div>
      </div>
   </nav>
</header>
