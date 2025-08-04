@extends('backend.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Create Services</h4><br> <br>
                        <form action="{{route('services.store')}}" method="POST" role="form" enctype="multipart/form-data">
                          @csrf
                          <div class="row">
                            <div class="form-group mt-3">
                              <input type="text" name="icon" class="form-control" id="" placeholder="Inter The Icon Code" required>
                            </div>

                            <div class="form-group mt-3">
                              <input type="text" class="form-control" name="title" id="" placeholder="Inter Title" required>
                            </div>

                          
                          <div class="form-group mt-3">
                            <input type="text" class="form-control" name="description" id="" placeholder="Inter description" required>
                          </div>

                         
                        
                          <br/> <br/>
                          <br>
                          <div class="text-center"><button type="submit" class="btn btn-info waves-effect waves-light">Save Data</button></div>

                          
                         <div class="text-center"><br>
                          <a href="{{route('services.index')}}" class="btn btn-info waves-effect waves-light">Back</a>
                          </div> 
                          </div>

                        </form>
              
                        
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
</div>

@endsection
