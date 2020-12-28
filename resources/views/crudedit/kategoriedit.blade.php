@extends('dashboard.app')
@section('content')
<div class="container py-5">
  <form action="{{route('kategori-update', $kategori->id)}}" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
      <label>Nama Kategori</label>
      <input type="text" name="kategori" class="form-control" value="{{$kategori->kategori}}">
      <small id="emailHelp" class="form-text text-muted">isi kategori</small>
    </div>
    <button type="submit" class="btn btn-warning">Update</button>
    <a href="{{route('dashboard-index')}}" class="btn btn-secondary">Kembali</a>
  </form>
</div>
@endsection