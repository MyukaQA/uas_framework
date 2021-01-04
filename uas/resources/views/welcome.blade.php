@extends('layouts.master')
@section('content')
<div class="container">
  <div class="row py-5 text-center justify-content-center">
    <h2>Fitur-fitur di</h2>
  </div>
</div>
<div class="p-5 bg-white rounded shadow mb-5">
  <!-- Lined tabs-->
  <ul id="myTab2" role="tablist" class="nav nav-tabs nav-pills with-arrow lined flex-column flex-sm-row text-center">
    <li class="nav-item flex-sm-fill">
      <a id="home2-tab" data-toggle="tab" href="#admin" aria-selected="true" class="nav-link text-uppercase font-weight-bold rounded-0 active">Admin</a>
    </li>
    <li class="nav-item flex-sm-fill">
      <a id="profile2-tab" data-toggle="tab" href="#user" aria-selected="false" class="nav-link text-uppercase font-weight-bold rounded-0">User</a>
    </li>
  </ul>
  <div id="myTab2Content" class="tab-content">
    <div id="admin" role="tabpanel" aria-labelledby="home-tab" class="tab-pane fade px-4 py-5 show active">
          
      <div class="row py-1">
        <div class="col-lg-3 mx-auto mb-5">
          <div class="progress">
            <div class="progress-bar w-100" style="background-color: #E64C3C"></div>
          </div>
          <figure class="rounded p-3 bg-white shadow text-center h-100">
            <img src="{{asset('img/admin-book-1.png')}}" alt="" class="w-50 card-img-top">
            <figcaption class="p-4 card-img-bottom">
              <h2 class="h5 font-weight-bold mb-2 text-center">Data Buku</h2>
              <p class="mb-0 text-small text-muted font-italic">Membuat data buku</p>
            </figcaption>
          </figure>
        </div>
        <div class="col-lg-3 mx-auto mb-5">
          <div class="progress">
            <div class="progress-bar w-100" style="background-color: #1E81CE"></div>
          </div>
          <figure class="rounded p-3 bg-white shadow text-center h-100">
            <img src="{{asset('img/admin-book-2.png')}}" alt="" class="w-50 card-img-top">
            <figcaption class="p-4 card-img-bottom">
              <h2 class="h5 font-weight-bold mb-2 text-center">Kategori</h2>
              <p class="mb-0 text-small text-muted font-italic">Membuat kategori buku</p>
            </figcaption>
          </figure>
        </div>
        <div class="col-lg-3 mx-auto mb-5">
          <div class="progress">
            <div class="progress-bar w-100" style="background-color: #AA6A51"></div>
          </div>
          <figure class="rounded p-3 bg-white shadow text-center h-100">
            <img src="{{asset('img/admin-book-3.png')}}" alt="" class="w-50 card-img-top">
            <figcaption class="p-4 card-img-bottom">
              <h2 class="h5 font-weight-bold mb-2 text-center">Rak Buku</h2>
              <p class="mb-0 text-small text-muted font-italic">Membuat data rak buku</p>
            </figcaption>
          </figure>
        </div>
      </div>

    </div>

    <div id="user" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade px-4 py-5">
      
      <div class="row py-1">
        <div class="col-lg-3 mx-auto mb-5">
          <div class="progress">
            <div class="progress-bar w-100" style="background-color: #FFE451"></div>
          </div>
          <figure class="rounded p-3 bg-white shadow text-center h-100">
            <img src="{{asset('img/user-book-1.png')}}" alt="" class="w-50 card-img-top">
            <figcaption class="p-4 card-img-bottom">
              <h2 class="h5 font-weight-bold mb-2 text-center">Cari Buku</h2>
              <p class="mb-0 text-small text-muted font-italic">Mencari buku yang ada</p>
            </figcaption>
          </figure>
        </div>
        <div class="col-lg-3 mx-auto mb-5">
          <div class="progress">
            <div class="progress-bar w-100" style="background-color: #ED1C24"></div>
          </div>
          <figure class="rounded p-3 bg-white shadow text-center h-100">
            <img src="{{asset('img/user-book-2.png')}}" alt="" class="w-50 card-img-top">
            <figcaption class="p-4 card-img-bottom">
              <h2 class="h5 font-weight-bold mb-2 text-center">Favorit Buku</h2>
              <p class="mb-0 text-small text-muted font-italic">Menandai buku yang disukai</p>
            </figcaption>
          </figure>
        </div>
      </div>

    </div>
  </div>
  <!-- End lined tabs -->
</div>

<div class="p-5 bg-white rounded shadow mb-5">
  <div class="row mb-3">
    <div class="col-lg-12 text-center">
      <h3>Anggota Kelompok</h3>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-3 mx-auto">
      <figure class="rounded p-3 shadow text-center h-100" style="background-color: #a7c5eb">

        <figcaption class="p-4 card-img-bottom">
          <h2 class="h5 font-weight-bold mb-2 text-center">LINDA FITRI DWI WULYANTI</h2>
          <p class="mb-0 text-small text-muted font-italic">182410102040</p>
        </figcaption>
      </figure>
    </div>

    <div class="col-lg-3 mx-auto">
      <figure class="rounded p-3 shadow text-center h-100" style="background-color: #a7c5eb">

        <figcaption class="p-4 card-img-bottom">
          <h2 class="h5 font-weight-bold mb-2 text-center">MYLIAN GEDHE</h2>
          <p class="mb-0 text-small text-muted font-italic">182410102048</p>
        </figcaption>
      </figure>
    </div>

    <div class="col-lg-3 mx-auto">
      <figure class="rounded p-3 shadow text-center h-100" style="background-color: #a7c5eb">

        <figcaption class="p-4 card-img-bottom">
          <h2 class="h5 font-weight-bold mb-2 text-center">ANNISA RAHMAWATI</h2>
          <p class="mb-0 text-small text-muted font-italic">182410102050</p>
        </figcaption>
      </figure>
    </div>
  </div>
</div>
@endsection