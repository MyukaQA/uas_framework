@extends('dashboard.app')
@section('content')
  <div class="container">
    <div class="row py-4">
      <div class="col-lg-12">
          <!-- Lined tabs-->
          <ul id="myTab2" role="tablist" class="nav nav-tabs nav-pills with-arrow lined flex-column flex-sm-row text-center">
            <li class="nav-item flex-sm-fill">
              <a id="home2-tab" data-toggle="tab" href="#emailsemua" aria-selected="true" class="nav-link text-uppercase font-weight-bold rounded-0 active">Newslatter All User</a>
            </li>
            <li class="nav-item flex-sm-fill">
              <a id="profile2-tab" data-toggle="tab" href="#emailsatu" aria-selected="false" class="nav-link text-uppercase font-weight-bold rounded-0">Newslatter One User</a>
            </li>
          </ul>
          <div id="myTab2Content" class="tab-content">
            <div id="emailsemua" role="tabpanel" aria-labelledby="home-tab" class="tab-pane fade px-4 py-5 show active">
                  
              <div class="row py-1">
                <div class="col-lg-12">
                  <form action="{{route('newslatter-all-user')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                      <label>Subject</label>
                      <input name="subject" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Deskripsi</label>
                      <textarea name="deskripsi" id="" cols="30" rows="3" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>

            </div>

            <div id="emailsatu" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade px-4 py-5">
              
              <div class="row py-1">
                <div class="col-lg-12">
                  <form action="{{route('newslatter-one-user')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                      <label>Email User</label>
                      <select name="email" class="form-control">
                        <option value="null">-- Pilih Email Tujuan --</option>
                        @foreach ($user as $u) 
                          <option value="{{$u->email}}">{{$u->email}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Subject</label>
                      <input name="subject" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Deskripsi</label>
                      <textarea name="deskripsi" id="" cols="30" rows="3" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>

            </div>
          </div>
          <!-- End lined tabs -->

      </div>
    </div>
  </div>
@endsection