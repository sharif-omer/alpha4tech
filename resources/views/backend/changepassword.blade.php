@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">
        <h4 class="card-title">Change Password Page</h4> <br>

         @if(count($errors))
          @foreach($errors->all as $error)
              <p class="alert alert-danger" role="alert">{{$erorr}}</p>
          @endforeach 
         @endif

        <form method="POST" action="{{route('update.password')}}" >
            @csrf
            
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Old Passwrod</label>
                <div class="col-sm-10">
                    <input class="form-control" type="password" name="oldpassword" value="" id="oldpassword">
                </div>
            </div>
            @error('oldpassword')
             <span class="text-danger">
                <strong>{{ $message }}</strong>
             </span>
            @enderror

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">New Passwrod</label>
                <div class="col-sm-10">
                    <input class="form-control" type="password" name="newpassword" value="" id="newpassword">
                </div>
            </div>

            @error('newpassword')
                <span class="text-danger">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Confirm Passwrod</label>
                <div class="col-sm-10">
                    <input class="form-control" type="password" name="confirmpassword" value="" id="confirmpassword">
                </div>
            </div>
            @error('confirmpassword')
                <span class="text-danger">
                    <strong>{{ $message }}</strong>
                </span>
          @enderror <br>

            <input type="submit" value="Change Password" class="btn btn-info waves-effect waves-light">
        </form>      
    </div>
</div>
</div>
</div>
    </div>
</div>

@endsection