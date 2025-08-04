@extends('admin.admin_master')
@section('admin')

<div class="page-content">
     <div class="container-fluid">
       <div class="row">
        <div class="col-sm-6 col-lg-6">
            <div class="card"><br>
                <center>
                    <img src="{{asset('backEnd/assets/images/small/img-5.jpg')}}" class="rounded-circle avatar-xl" alt="...">
                </center>
                <div class="card-body">
                  <h5 class="card-title">Name : {{$adminData->name}}</h5>
                  <hr>
                  <h5 class="card-title">User Email : {{$adminData->email }}</h5>
                  <hr>
                  <a href="{{route('edite.profile')}}" class="btn btn-info btn-rounded waves-effect waves-light">Edit Profile</a>
                </div>
            </div>
        </div>
       </div>
    </div>
</div>


@endsection