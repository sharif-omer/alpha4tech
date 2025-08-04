@extends('backend.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Services</h4><br> <br>
                       
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead style="background-color: #17d; color:white">
                            <tr>
                                <th>ID</th>
                                <th>Icon</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>a ction</th>
                            </tr>
                            </thead>

                            <tbody>
                                @php($i = 1)
                                @foreach ($services_data as $item)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$item->icon}}</td>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->description}}</td>
                                                                      
                                 <td>

                                    <a href="{{route('services.edit',$item->id)}}" class="btn btn-info sm" title="Edit Data" > <i class="fas fa-edit"></i> </a>

                                    <a href="{{route('services.destroy',$item->id)}}" class="btn btn-danger sm" title="Delete Data" id="delete"> <i class="fas fa-trash-alt">
                                        </i> 
                                    </a>



                                  
                                    </td>                                   
                                </tr>
                                @endforeach
                           
                            </tbody>
                        </table>
                        <a href="{{route('services.create')}}" class="btn btn-info">Add New Service</a>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
</div>


@endsection
