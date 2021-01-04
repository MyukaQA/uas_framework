@extends('dashboard.app')
@section('content')
  <div class="container">
    <div class="row py-5">
      <div class="col-lg-12">
        @if ($suka->count() == 0)
        <div class="alert alert-primary" role="alert">
          Anda belum memiliki buku favorit, silahkan <a href="{{route('dashboard-index')}}" class="alert-link">cari buku</a> favorit Anda. Terima kasih.
        </div>
        @else
          @foreach ($suka as $love)
          <div class="shadow border-custom-list-buku mb-5" style="background-color: #a7c5eb">
            <div class="row">
              <div class="col-lg-3 img-cover-buku-custom-position">
                <a href="{{route('buku-show', $love->buku->id)}}"><img src="{{$love->buku->getCover()}}" alt="" class="img-fluid w-75 m-3 shadow"></a>
              </div>
              <div class="col-lg-9">
                <a href="{{route('buku-show', $love->buku->id)}}" class="text-dark"><h4 class="font-weight-bold text-left mt-3 text-list-buku-custom-position">{{$love->buku->judul}} <i class="h6">({{$love->buku->kategori->kategori}})</i></h4></a>
                <p class="text-bold font-italic text-list-buku-custom-position">Penulis : {{$love->buku->penulis}}</p>
                <p class="text-bold font-italic text-list-buku-custom-position">Penerbit : {{$love->buku->penerbit}}</p>
                <p class="font-weight-bold text-list-buku-custom-position">Tentang Buku :</p>
                <p class="text-bold text-list-buku-custom-position"> {{Str::limit($love->buku->detail, 100, '..')}}</p>
              </div>
            </div>
          </div>
          @endforeach
        @endif
      </div>
    </div>
  </div>
@endsection