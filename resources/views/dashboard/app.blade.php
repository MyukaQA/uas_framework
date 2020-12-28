<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>UAS Framework</title>

  {{-- dari luar --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  {{-- dari dalam --}}
  <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
  <link rel="stylesheet" href="{{asset('css/buku.css')}}">
</head>
<body>
  <section class="py-5 header text-center" style="background-color: #a7c5eb">
    <div class="container py-5 text-dark">
      <header class="py-5">
        <h1 class="display-4 font-custom-header">Web Pencari Buku</h1>
        <p class="font-italic mb-1">Web ini bertujuan untuk mempermudah dalam mencari buku di rak buku</p>
        <p class="font-italic">UAS Framework by <b class="text-white">Kelompok 1</b></p>
      </header>
      @if (Auth::user()->role == 'admin')        
        <h3 class="font-custom-header">Hai admin</h3>
      @else
      <h3 class="font-custom-header">Selamat Datang {{Auth::user()->name}}</h3>
      @endif
    </div>
  </section>


<!-- Sticky navbar-->
<header class="header sticky-top">
  <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 shadow-sm">
      <div class="container"><a class="navbar-brand" href="{{route('welcome')}}">
          <strong class="h6 mb-0 font-weight-bold text-uppercase">UAS Framework</strong></a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                  
                  @if (auth()->user()->role == 'admin')
                    <li class="nav-item"><a class="nav-link" href="#buku">Buku</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kategori">Kategori</a></li>
                    <li class="nav-item"><a class="nav-link" href="#rak_buku">Rak Buku</a></li>                
                  @else
                    <li class="nav-item"><a class="nav-link" href="#cari-buku">Cari Buku</a></li>
                  @endif
                  @guest
                    <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Masuk</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('register')}}">Daftar</a></li>
                  @else
                  <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                       Hai, {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a href="{{route('dashboard-index')}}" class="dropdown-item">dashboard</a>
                      <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                    </div>
                  </li>
                  @endguest
              </ul>
          </div>
      </div>
  </nav>
</header>
  

@yield('content')

  <footer class="bg-dark pb-5">
    <div class="container text-center">
      <p class="font-italic mb-0 text-white">&copy; Copyrights <b class="font-weight-bold">Kelompok 1 UAS Framework</b>.</p>
    </div>
  </footer>

  @include('sweetalert::alert')

  {{-- dari luar --}}
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
 
  {{-- dari dalam --}}
  {{-- <script src="{{asset('js/navbar.js')}}"></script> --}}

</body>
</html>