@extends('admin.admin_master')
@section('admin')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<div class="page-content">
    <div class="container-fluid">
<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">
        <h4 class="card-title">Our Team</h4> <br>
        <form method="GET" action="#"  enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="id" value="{{$team_data->id}}">

            {{-- <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="title" value="{{$team_data->title}}" id="example-text-input">
                </div>
            </div> --}}

            <div class="row mb-3">
              <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-10">
                  <input class="form-control" type="text" name="name" value="{{$team_data->name}}" id="example-text-input">
              </div>
          </div>

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Current Position</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="current_position" value="{{$team_data->current_position}}" id="example-text-input">
                </div>
            </div> 

            <div class="row mb-3">
              <label for="example-text-input" class="col-sm-2 col-form-label">Facebook Url</label>
              <div class="col-sm-10">
                  <input class="form-control" type="url" name="facebook_url" value="{{$team_data->facebook_url}}" id="example-text-input">
              </div>
           </div>

           <div class="row mb-3">
            <label for="example-text-input" class="col-sm-2 col-form-label">Instgram Url</label>
            <div class="col-sm-10">
                <input class="form-control" type="url" name="instgram_url" value="{{$team_data->instgram_url}}" id="example-text-input">
            </div>
         </div>

         <div class="row mb-3">
          <label for="example-text-input" class="col-sm-2 col-form-label">Linkedin Url</label>
          <div class="col-sm-10">
              <input class="form-control" type="url" name="linkdin_url" value="{{$team_data->linkdin_url}}" id="example-text-input">
          </div>
       </div> 

       <div class="row mb-3">
        <label for="example-text-input" class="col-sm-2 col-form-label">Twitter Url</label>
        <div class="col-sm-10">
            <input class="form-control" type="url" name="twitter_url" value="{{$team_data->twitter_url}}" id="example-text-input">
        </div>
     </div>

           

            
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-10">
                    <input class="form-control" type="file" id="image" name="image">
                </div>
            </div>

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <img id="showImage" src="{{(!empty($team_data->name))? url('upload/team_image/'.$team_data->name):url('upload/no_image.jpg')}}" class="rounded avatar-lg" alt="...">
                </div>
            </div>

            <input type="submit" value="Save Data" class="btn btn-info waves-effect waves-light">
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