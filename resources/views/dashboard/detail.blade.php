@extends('dashboard.app')
@section('content')
<style>
  /* Custom CSS hanya untuk Search bar */
  hr.dashed {
      border-top: 2px dashed #999;
  }
  .position-love-button-custom{
    transform: translateY(-3rem);
  }
  .btn-circle {
  width: 45px;
  height: 45px;
  line-height: 45px;
  text-align: center;
  padding: 0;
  border-radius: 50%;
  }

  .btn-circle i {
    position: relative;
    top: -1px;
  }

  .btn-circle-xl {
  width: 70px;
  height: 70px;
  line-height: 70px;
  font-size: 1.3rem;
  }
</style>
  <div class="container">
    <div class="row py-5 text-center">
      <div class="col-lg-3 mx-auto">
        <a href="" class="btn btn-outline-secondary w-100 h-100"><i class="fa fa-sticky-note" aria-hidden="true"></i> Ulasan</a>
      </div>
      <div class="col-lg-3 mx-auto">
        <a href="{{route('dashboard-index')}}" class="btn btn-outline-danger w-100 h-100"><i class="fa fa-heart-o" aria-hidden="true"></i> Sukai</a>
      </div>
      <div class="col-lg-3 mx-auto">
        <a href="{{route('dashboard-index')}}" class="btn btn-outline-secondary w-100 h-100"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</a>
      </div>
    </div>
  </div>
  <div class="bg-white rounded shadow-lg mb-5">
    <div class="container">
      <div class="row py-5">
        <div class="col-lg-4 mx-auto custom-position text-center shadow h-100" style="background-color: #a7c5eb">
          <div>
            <img src="{{$buku->getCover()}}" alt="" class="img-fluid w-75 shadow-lg">
          </div>
        </div>

        <div class="col-lg-8 mx-auto">
          <h4 class="font-weight-bold text-center text-list-buku-custom-position mb-3">{{$buku->judul}}</h4>

          <div class="p-3 bg-white rounded shadow mb-5">
            <!-- Lined tabs-->
            <ul id="myTab2" role="tablist" class="nav nav-tabs nav-pills with-arrow lined flex-column flex-sm-row text-center">
              <li class="nav-item flex-sm-fill">
                <a id="home2-tab" data-toggle="tab" href="#kategori" role="tab" aria-selected="true" class="nav-link text-uppercase font-weight-bold mr-sm-3 rounded-0 active">Kategori</a>
              </li>
              <li class="nav-item flex-sm-fill">
                <a id="profile2-tab" data-toggle="tab" href="#penulis" role="tab" aria-selected="false" class="nav-link text-uppercase font-weight-bold mr-sm-3 rounded-0">Penulis</a>
              </li>
              <li class="nav-item flex-sm-fill">
                <a id="contact2-tab" data-toggle="tab" href="#penerbit" role="tab" aria-selected="false" class="nav-link text-uppercase font-weight-bold rounded-0">Penerbit</a>
              </li>
              <li class="nav-item flex-sm-fill">
                <a id="contact2-tab" data-toggle="tab" href="#rakbuku" role="tab" aria-selected="false" class="nav-link text-uppercase font-weight-bold rounded-0">Rak Buku</a>
              </li>
            </ul>
            <div id="myTab2Content" class="tab-content">
              <div id="kategori" role="tabpanel" aria-labelledby="home-tab" class="tab-pane fade px-4 py-3 show active">
                <h3 class="font-weight-bold font-italic text-center">{{$buku->kategori->kategori}}</h3>
              </div>
              <div id="penulis" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade px-4 py-3">
                <h3 class="font-weight-bold font-italic text-center">{{$buku->penulis}}</h3>
              </div>
              <div id="penerbit" role="tabpanel" aria-labelledby="contact-tab" class="tab-pane fade px-4 py-3">
                <h3 class="font-weight-bold font-italic text-center">{{$buku->penerbit}}</h3>
              </div>
              <div id="rakbuku" role="tabpanel" aria-labelledby="contact-tab" class="tab-pane fade px-4 py-3">
                <h3 class="font-weight-bold font-italic text-center">{{$buku->rakBuku->rak_buku}}</h3>
              </div>
            </div>
            <!-- End lined tabs -->
          </div>

          {{-- tentang buku --}}
          <div class="p-3 rounded shadow" style="background-color: #a7c5eb">
            <p class="h5 font-weight-bold">Tentang Buku :</p>
          </div>

        </div>
      </div>

      <div class="row py-4">
        <div class="col-md-12 col-lg-12">
          <div class="p-3 rounded shadow mb-5" style="background-color: #00303f">
            <p class="h5 font-weight-bold text-white">Beri Ulasan : </p>
            <form action="{{route('ulasan-create')}}" method="POST">
              {{ csrf_field() }}
              <div class="form-group">
                <input type="text" name="buku_id" value="{{$buku->id}}" class="d-none">
                <textarea name="ulasan" id="" cols="30" rows="7" class="form-control" placeholder="Beri Ulasan.."></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
          </div>
        </div>
      </div>

      <hr class="dashed">

      <div class="row py-4">
        <div class="col-md-12 col-lg-12">
          @foreach ($ulasan->where('buku_id', $buku->id) as $item)
            <div class="card">
              <div class="card-header">
                {{$item->user->name}}
              </div>
              <div class="card-body">
                <p class="text-bold">{{$item->ulasan}}</p>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
@endsection