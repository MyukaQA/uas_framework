@extends('dashboard.app')
@section('content')
<div class="container py-5">
  <form action="{{route('rakbuku-update', $rak->id)}}" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
      <label>Kode Rak Buku</label>
      <input type="text" name="rak_buku" class="form-control" value="{{$rak->rak_buku}}">
      <small id="emailHelp" class="form-text text-muted">isi kode rak buku</small>
    </div>
    <button type="submit" class="btn btn-warning">Update</button>
    <a href="{{route('dashboard-index')}}" class="btn btn-secondary">Kembali</a>
  </form>
</div>
@endsection