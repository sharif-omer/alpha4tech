@extends('backend.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title"> Our Team</h4><br> <br>
                        <form action="{{route('team.store')}}" method="POST" role="form" enctype="multipart/form-data">
                          @csrf
                          <div class="row">
                            <div class="form-group mt-3">
                              <input type="text" name="name" class="form-control" id="name" placeholder="Inter The Name" required>
                            </div>

                            <div class="form-group mt-3">
                              <input type="text" class="form-control" name="current_position" id="" placeholder="Inter Current Position" required>
                            </div>

                          
                          <div class="form-group mt-3">
                            <input type="text" class="form-control" name="facebook_url" id="facebook_url" placeholder="Inter Facebook URL" required>
                          </div>

                          <div class="form-group mt-3">
                            <input type="text" class="form-control" name="instgram_url" id="instgram_url" placeholder="Inter Instgram URL" required>
                          </div>

                          <div class="form-group mt-3">
                            <input type="text" class="form-control" name="linkdin_url" id="linkdin_url" placeholder="Inter Linkedin URL" required>
                          </div>

                          <div class="form-group mt-3">
                            <input type="text" class="form-control" name="twitter_url" id="	twitter_url" placeholder="Inter Twitter URL" required>
                          </div>

                          <div class="form-group mt-3">
                            <input type="file" class="form-control" name="team_image" id="image" placeholder="Inter Image" required>
                          </div>
                           
                          {{-- <div class="form-group mt-3">
                            <img id="showImage" src="{{ asset($team_data->team_image)}}" class="" alt="...">
                        </div> --}}

                          <br>
                          <div class="mt-3"><button type="submit" class="btn btn-info waves-effect waves-light">Save Data</button></div>

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
