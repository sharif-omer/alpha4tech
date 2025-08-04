@extends('backend.admin_master')
@section('admin')

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<div class="page-content">
    <div class="container-fluid">
<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">
        <h4 class="card-title">Edit Profile Page</h4> <br>
        <form action="{{route('store.profile')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="name" value="{{$editData->name}}" id="example-text-input">
                </div>
            </div>
            
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">User Email</label>
                <div class="col-sm-10">
                    <input class="form-control" type="email" name="email" value="{{$editData->email}}" id="example-text-input">
                </div>
            </div>

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Profile Image</label>
                <div class="col-sm-10">
                    <input class="form-control" type="file" id="image" name="profile_image">
                </div>
            </div>

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <img id="showImage" src="{{(!empty($editData->profile_image))? url('upload/admin_images/'.$editData->profile_image):url('upload/no_image.jpg')}}" class="rounded avatar-lg" alt="...">
                </div>
            </div>

            <input type="submit" value="Update Profile" class="btn btn-info waves-effect waves-light">
        </form>      
    </div>
</div>
</div>
</div>
    </div>
</div>

<script>

  $(document).ready(function(){
    $('#image').change(function(e){
        var reader = new fileReader();
        reader.onload = function(e){
            $('#showImage').attr('src',e.target.result);
        }
        reader.readAsDataURL(e.target.files['0']);
    });
  });
</script>
@endsection