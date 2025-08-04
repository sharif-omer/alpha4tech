@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        
                        <h4 class="card-title"> Posts</h4><br> <br>
                        <form method="PUT" action="{{route('post.update')}}"  role="form" enctype="multipart/form-data">
                          @csrf

                          <input type="hidden" name="id" value="{{$post->id}}">
                          <div class="row">
                            <div class="form-group mt-3">
                              <input type="text" name="title" class="form-control" id="title" value="{{$post->title}}">
                            </div>

  

                          <div class="form-group mt-3">
                            <input type="file" class="form-control" name="post_image" id="image" placeholder="">
                          </div>

                          <div class="form-group mt-3">
                            <textarea name="content" class="form-control" id="content" cols="30" rows="10" placeholder="">
                                {{$post->content}}
                            </textarea>
                          </div>
                           
                         

                         
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <img id="showImage" src="{{(!empty($post->post_image))? url('upload/post_images/'.$post->post_image):url('upload/no_image.jpg')}}" class="rounded avatar-lg" alt="...">
                </div>
            </div>

                          <br>
                          <div class="text-center"><button type="submit" class="btn btn-info waves-effect waves-light" method="PUT">Update Posts</button></div>

                          
                         <div class="text-center"><br>
                          <a href="{{route('post.index')}}" class="btn btn-info waves-effect waves-light">Back</a>
                          </div> 
                          </div>

                        </form>
              
                        
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
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
