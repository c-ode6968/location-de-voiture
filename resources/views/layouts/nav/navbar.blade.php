  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="{{route('home')}}" class="logo d-flex align-items-center me-auto me-lg-0">
        <h1>Herzt<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{route('home')}}">Home</a></li>
          <li><a href="{{route('catvoiture')}}">Catalogues</a></li>
          <li><a href="{{route('personnel')}}">Notre Personnels</a></li>
          <li><a href="{{route('staff.home')}}">Staff</a></li>
        
          <li><a href="#gallery">Login</a></li>
          <li><a href="#contact">Register</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
