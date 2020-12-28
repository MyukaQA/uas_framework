@extends('dashboard.app')
@section('content')
  <div class="container py-5">
    <form action="{{route('buku-update', $bukuone->id)}}" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="form-group">
        <label>Judul Buku</label>
        <input type="text" name="judul" class="form-control" value="{{$bukuone->judul}}">
        <small id="emailHelp" class="form-text text-muted">isi Judul Buku</small>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Cover Buku</label>
          <input type="text" name="oldimg" class="form-control d-none" value="{{$bukuone->cover_buku}}">
          <input type="file" name="cover_buku" class="form-control-file" id="customFile">
        </div>
        <div class="form-group col-md-6">
          <div>
            <a data-toggle="collapse" href="#default" role="button"><i class="fa fa-picture-o fa-2x"></i></a>
            <div class="collapse" id="default">
              <img class="img-fluid w-25" src="{{$bukuone->getCover()}}" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Penulis</label>
          <input type="text" name="penulis" class="form-control" value="{{$bukuone->penulis}}">
          <small id="emailHelp" class="form-text text-muted">Penulis Buku</small>
        </div>
        <div class="form-group col-md-6">
          <label>Penerbit</label>
          <input type="text" name="penerbit" class="form-control" value="{{$bukuone->penerbit}}">
          <small id="emailHelp" class="form-text text-muted">Penerbit Buku</small>
        </div>
      </div>
      <div class="form-group">
        <label>Tentang Buku</label>
        <textarea name="detail" class="form-control" cols="30" rows="3">{{$bukuone->detail}}</textarea>
        <small id="emailHelp" class="form-text text-muted">Penerbit Buku</small>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Kategori</label>
          <input type="text" name="kategori" class="form-control d-none" value="{{$bukuone->kategori_id}}">
          <input type="text" class="form-control" readonly value="{{$bukuone->kategori->kategori}}">
        </div>
        <div class="form-group col-md-6">
          <label>Rak Buku</label>
          <input type="text" name="rak_buku" class="form-control d-none" value="{{$bukuone->rak_buku_id}}">
          <input type="text" class="form-control" readonly value="{{$bukuone->rakBuku->rak_buku}}">
        </div>
      </div>
      <button type="submit" class="btn btn-warning">Update</button>
      <a href="{{route('dashboard-index')}}" class="btn btn-secondary">Kembali</a>
    </form>
  </div>
@endsection