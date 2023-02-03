<div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        {{-- <h1 class="text-light"><a href="index.html">Serenity</a></h1> --}}
        <!-- Uncomment below if you prefer to use an image logo -->
       <a href="{{('/')}}"><img src="assets/img/unikom.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul class="menu">
          <li><a class="menu_link" href="{{('/')}}">Home</a></li>
          <li class="dropdown"><a href="#"><span>Tentang</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="menu_link" href="{{url('/about')}}">Tentang</a></li>
              <li><a class="menu_link" href="{{url('/fasilitas')}}">Fasilitas</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Menu</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="https://my.unikom.ac.id/index.php?err=1">My Academic</a></li>
              <li><a href="https://lms.unikom.ac.id/">LMS</a></li>
              <li><a href="https://mahasiswa.unikom.ac.id/">Dashboard</a></li>
              <li><a href="https://kuliahonline.unikom.ac.id/">Kuliah Online</a></li>
            </ul>
          </li>
          <li><a class="menu_link" href="{{url('/dosenn')}}">Dosen</a></li>
          <li><a class="menu_link" href="{{url('/mahasiswaa')}}">Mahasiswa</a></li>
          <li><a class="menu_link" href="contact.html">Contact</a></li>

          <li><a class="getstarted" href="about.html">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
