@extends('dashboard.app')
@section('content')
<style>
/* Custom CSS hanya untuk Search bar */
.form-control:focus {
  box-shadow: none;
}

.form-control-underlined {
  border-width: 0;
  border-bottom-width: 1px;
  border-radius: 0;
  padding-left: 0;
}

/* Custom CSS hanya untuk Search bar */
hr.dashed {
    border-top: 2px dashed #999;
}

.custom-button-buku-all{
  border-color: #a7c5eb;
  /* background-color: #a7c5eb; */
  color: #a7c5eb;
  font-weight: bold;
}
.custom-button-buku-all:hover{
  background-color: #a7c5eb;
  font-weight: bold;
  color: white;
}
</style>

<div class="container">
  <div class="row py-5 text-center justify-content-center">
    <div class="col lg-3 mx-auto">
      <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
        <div class="card-body">
          <h5 class="h3 card-title">Data Buku</h5>
          <h5 class="card-text">{{$bukus->count()}}</h5>
          <p class="text-bold">(data)</p>
        </div>
      </div>
    </div>

    <div class="col lg-3 mx-auto">
      <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
        <div class="card-body">
          <h5 class="h3 card-title">Kategori</h5>
          <h5 class="card-text">{{$kategoris->count()}}</h5>
          <p class="text-bold">(data)</p>
        </div>
      </div>
    </div>

    <div class="col lg-3 mx-auto">
      <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
        <div class="card-body">
          <h5 class="h3 card-title">Rak Buku</h5>
          <h5 class="card-text">{{$rakBukus->count()}}</h5>
          <p class="text-bold">(data)</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="p-5 bg-white rounded shadow-lg mb-5">
  @if (auth()->user()->role == 'admin')
  {{-- Data Buku --}}
  <div class="row py-5" id="buku">
    <div class="col-lg-3 mx-auto">
      <h3 class="font-weight-bold">Data Buku</h3>
      <p>admin dapat melihat data buku yang telah dibuat sebelumnya</p>

      <button class="btn btn-primary shadow w-100 mb-5" data-toggle="modal" data-target="#buat-data-buku">Buat Data Buku</button>

      <!-- Modal Buat Data Buku -->
      <div class="modal fade" id="buat-data-buku" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Buat Data Buku</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{route('buku-create')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                  <label>Judul Buku</label>
                  <input type="text" name="judul" class="form-control">
                  <small id="emailHelp" class="form-text text-muted">isi Judul Buku</small>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label>Cover Buku</label>
                    <input type="file" name="cover_buku" class="form-control-file" id="customFile">
                  </div>
                  <div class="form-group col-md-6">
                    <small class="text-muted">Cover buku sudah ada defaultnya, jadi tidak diisi tidak apa-apa</small>
                    <div>
                      <a data-toggle="collapse" href="#default" role="button"><i class="fa fa-picture-o fa-2x"></i></a> <small class="text-muted">lihat default cover</small>
                      <div class="collapse" id="default">
                        <img class="img-fluid w-25" src="{{asset('img/cover/default.png')}}" alt="">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label>Penulis</label>
                    <input type="text" name="penulis" class="form-control">
                    <small id="emailHelp" class="form-text text-muted">Penulis Buku</small>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Penerbit</label>
                    <input type="text" name="penerbit" class="form-control">
                    <small id="emailHelp" class="form-text text-muted">Penerbit Buku</small>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label>Kategori</label>
                    <select name="kategori" class="form-control">
                      @foreach ($kategoris as $kategori)
                        <option value="{{$kategori->id}}">{{$kategori->kategori}}</option>
                      @endforeach
                    </select>
                    <small id="emailHelp" class="form-text text-muted">Pilih kategori buku</small>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Rak Buku</label>
                    <select name="rak_buku" class="form-control">
                      @foreach ($rakBukus as $rakBuku)
                        <option value="{{$rakBuku->id}}">{{$rakBuku->rak_buku}}</option>
                      @endforeach
                    </select>
                    <small id="emailHelp" class="form-text text-muted">Pilih rak buku</small>
                  </div>
                </div>
                <div class="form-group">
                  <label>Tentang Buku</label>
                  <textarea name="detail" class="form-control" cols="30" rows="5"></textarea>
                  <small id="emailHelp" class="form-text text-muted">Jelaskan tentang buku ini</small>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>


    </div>
    <div class="col-lg-8 mx-auto">

      <div class="table-responsive">
        <table class="table table-hover">
          <thead class="thead-dark">
            <tr>
              <th>Judul Buku</th>
              <th>Kategori Buku</th>
              <th>Rak Buku</th>
              <th>Penulis</th>
              <th>Penerbit</th>
              <th>aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($bukus as $buku)
              <tr>
                <th><a href="{{route('buku-show', $buku->id)}}" class="text-dark">{{$buku->judul}}</a></th>
                <td>{{$buku->kategori->kategori}}</td>
                <td>{{$buku->rakBuku->rak_buku}}</td>
                <td>{{$buku->penulis}}</td>
                <td>{{$buku->penerbit}}</td>
                <td>
                  <a href="{{route('buku-edit', $buku->id)}}" class="btn btn-outline-warning btn-sm m-1"><i class="fa fa-pencil"></i></a>
                  <a href="" class="btn btn-outline-danger btn-sm m-1" data-toggle="modal" data-target="#hapus-data-buku{{$buku->id}}"><i class="fa fa-trash"></i></a>
                </td>
              </tr>

              <!-- Modal Hapus Data Buku -->
              <div class="modal fade" id="hapus-data-buku{{$buku->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-body">
                      <div class="alert alert-warning" role="alert">
                        Tekan <b>Hapus</b> jika sudah yakin
                      </div>
                      <a href="{{route('buku-hapus', $buku->id)}}" class="btn btn-danger">Hapus</a>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <hr class="dashed">

  {{-- KATEGORI --}}
  <div class="row py-5" id="kategori">
    <div class="col-lg-8 mx-auto">
      <div class="table-responsive mb-5">
        <table class="table table-hover">
          <thead class="thead-dark">
            <tr>
              <th>No</th>
              <th>Nama Kategori</th>
              <th>aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($kategoris as $kategori)
              <tr>
                <td>{{$kategori->id}}</td>
                <td>{{$kategori->kategori}}</td>
                <td>
                  <a href="{{route('kategori-edit', $kategori->id)}}" class="btn btn-outline-warning btn-sm m-1"><i class="fa fa-pencil"></i></a>
                  <a href="" class="btn btn-outline-danger btn-sm m-1" data-toggle="modal" data-target="#hapus-kategori{{$kategori->id}}"><i class="fa fa-trash"></i></a>
                </td>
              </tr>

              <!-- Modal Hapus kategori -->
              <div class="modal fade" id="hapus-kategori{{$kategori->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-body">
                      <div class="alert alert-warning" role="alert">
                        Tekan <b>Hapus</b> jika sudah yakins
                      </div>
                      <a href="{{route('kategori-hapus', $kategori->id)}}" class="btn btn-danger">Hapus</a>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

    <div class="col-lg-3 mx-auto">
      <h3 class="font-weight-bold text-right" >Kategori</h3>
      <p class="text-right">Berfungsi untuk membuat Kategori buku, 1 buku memiliki 1 kategori, 1 kategori memiliki banyak buku</p>

      <button class="btn btn-primary shadow w-100 mb-5" data-toggle="modal" data-target="#buat-kategori">Buat Kategori</button>

      <!-- Modal Buat Kategori Buku -->
      <div class="modal fade" id="buat-kategori" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Buat Kategori</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{route('kategori-create')}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                  <label>Nama Kategori</label>
                  <input type="text" name="kategori" class="form-control">
                  <small id="emailHelp" class="form-text text-muted">isi nama kategori</small>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <hr class="dashed">

  {{-- Rak Buku --}}
  <div class="row py-5" id="rak_buku">
    <div class="col-lg-3 mx-auto">
      <h3 class="font-weight-bold" >Data Rak Buku</h3>
      <p>Rak buku berfungsi untuk menempatkan buku dengan teratur di rak</p>

      <button class="btn btn-primary shadow w-100 mb-5" data-toggle="modal" data-target="#buat-rak">Buat Data Rak Buku</button>

      <!-- Modal Buat Rak Buku -->
      <div class="modal fade" id="buat-rak" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Buat Rak Buku</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{route('rakbuku-create')}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                  <label>Nama Kode Rak Buku</label>
                  <input type="text" name="rak_buku" class="form-control">
                  <small id="emailHelp" class="form-text text-muted">isi kode rak buku, contoh : A001, A002, dst</small>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-8 mx-auto">

      <div class="table-responsive">
        <table class="table table-hover">
          <thead class="thead-dark">
            <tr>
              <th>No</th>
              <th>Nama Kode Rak Buku</th>
              <th>aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($rakBukus as $rakBuku)
              <tr>
                <td>{{$rakBuku->id}}</td>
                <td>{{$rakBuku->rak_buku}}</td>
                <td>
                  <a href="{{route('rakbuku-edit', $rakBuku->id)}}" class="btn btn-outline-warning btn-sm m-1"><i class="fa fa-pencil"></i></a>
                  <a href="" class="btn btn-outline-danger btn-sm m-1" data-toggle="modal" data-target="#hapus-rak{{$rakBuku->id}}"><i class="fa fa-trash"></i></a>
                </td>
              </tr>

              <!-- Modal Hapus Rak Buku -->
              <div class="modal fade" id="hapus-rak{{$rakBuku->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-body">
                      <div class="alert alert-warning" role="alert">
                        Tekan <b>Hapus</b> jika sudah yakin
                      </div>
                      <a href="{{route('rakbuku-hapus', $rakBuku->id)}}" class="btn btn-danger">Hapus</a>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>    
  
  @else

    <div class="row">
      <div class="col-lg-3 mx-auto w-100">
        <h3 class="font-weight-bold" >Cari Buku</h3>
        <p>Anda bisa mencari buku yang tersedia</p>
        <a href="{{route('dashboard-index')}}" class="btn mt-3 w-100 text-bold custom-button-buku-all">Tampilkan Semua</a>
      </div>
  
      <div class="col-lg-9 mx-auto w-100">
        <form action="{{route('dashboard-index')}}" method="GET">
          <div class="input-group mb-5 border rounded-pill p-1 shadow-sm">
            <input name="cari" type="search" placeholder="Buku apa yang dicari ?" class="form-control bg-none border-0">
            <div class="input-group-append border-0">
              <button id="button-addon3" type="button" class="btn btn-link text-info"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </form>
  
        @foreach ($bukus as $buku)
          <div class="shadow border-custom-list-buku mb-5" style="background-color: #a7c5eb">
            <div class="row">
              <div class="col-lg-3 img-cover-buku-custom-position">
                <a href="{{route('buku-show', $buku->id)}}"><img src="{{$buku->getCover()}}" alt="" class="img-fluid w-75 m-3 shadow"></a>
              </div>
              <div class="col-lg-9">
                <a href="{{route('buku-show', $buku->id)}}" class="text-dark"><h4 class="font-weight-bold text-left mt-3 text-list-buku-custom-position">{{$buku->judul}} <i class="h6">({{$buku->kategori->kategori}})</i></h4></a>
                <p class="text-bold font-italic text-list-buku-custom-position">Penulis : {{$buku->penulis}}</p>
                <p class="text-bold font-italic text-list-buku-custom-position">Penerbit : {{$buku->penerbit}}</p>
                <p class="font-weight-bold text-list-buku-custom-position">Tentang Buku :</p>
                <p class="text-bold text-list-buku-custom-position">{{Str::limit($buku->detail, 100, '..')}}</p>
              </div>
            </div>
          </div>
        @endforeach

        {{$bukus->links()}}
  
      </div>
    </div>

  @endif
  
</div>
@endsection