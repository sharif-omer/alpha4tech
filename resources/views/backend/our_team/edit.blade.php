@extends('backend.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title"> Our Team</h4><br> <br>
                        <form action="{{route('team.update', $team) }}" method="POST" role="form" enctype="multipart/form-data">
                          @csrf
                          @method('PUT') 
                          <div class="row">
                            <div class="form-group mt-3">
                              <input type="text" name="name" class="form-control" id="name" value="{{old('name', $team->name)}}">
                            </div>

                            <div class="form-group mt-3">
                              <input type="text" class="form-control" name="current_position" id="" value="{{old('current_position', $team->current_position)}}">
                            </div>

                          
                          <div class="form-group mt-3">
                            <input type="text" class="form-control" name="facebook_url" id="facebook_url" value="{{old('facebook_url', $team->facebook_url)}}">
                          </div>

                          <div class="form-group mt-3">
                            <input type="text" class="form-control" name="instgram_url" id="instgram_url" value="{{old('instgram_url', $team->instgram_url)}}">
                          </div>

                          <div class="form-group mt-3">
                            <input type="text" class="form-control" name="linkdin_url" id="linkdin_url" value="{{old('linkdin_url', $team->linkdin_url)}}">
                          </div>

                          <div class="form-group mt-3">
                            <input type="text" class="form-control" name="twitter_url" id="	twitter_url" value="{{old('twitter_url', $team->twitter_url) }}">
                          </div>


                          <div class="form-group mt-3">
                            @if($team->team_image)
                            <img id="image-preview" src="{{ asset('storage/'.$team->team_image) }}" 
                                 class="img-fluid mb-3" alt="معاينة الصورة">
                           @else
                            <img id="image-preview" src="https://via.placeholder.com/300x200?text=صورة+الخبر" 
                                 class="img-fluid mb-3" alt="معاينة الصورة">
                           @endif
                            <input type="file" class="form-control" name="team_image" id="image" value="{{old('team_image', $team->team_image)}}">
                          </div>
                           
                         
                          <br>
                          <div class="mt-3">
                            <button type="submit" class="btn btn-info waves-effect waves-light">Save Data</button>
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

  // $(document).ready(function(){
  //   $('#image').change(function(e){
  //       var reader = new fileReader();
  //       reader.onload = function(e){
  //           $('#showImage').attr('src',e.target.result);
  //       }
  //       reader.readAsDataURL(e.target.files['0']);
  //   });
  // });
</script>
@endsection
