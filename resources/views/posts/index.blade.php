@extends('backend.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title"> All Posts</h4><br> <br>
                       
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead style="background-color: #17d; color:white">
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Date</th>
                                <th>Content</th>
                        
                                <th>A ction</th>
                            
                            </tr>
                            </thead>


                            <tbody>
                                @php($i = 1)
                                @foreach ($post as $item)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$item->title}} </td>
                                    <td>{{$item->post_image}} </td>
                                    <td>{{$item->created_at}} </td>   
                                    <td>{{$item->content}} </td>

                                    <td>
                                        <a href="{{route('post.edit',$item->id)}}" class="btn btn-info sm" title="Edit Data" > <i class="fas fa-edit"></i> </a>

                                     <a href="{{route('post.destroy', $item->id)}}" class="btn btn-danger sm" title="Delete Post" id="delete"> <i class="fas fa-trash-alt">
                                        </i> 
                                     </a>
                                  </td>                                   
                                </tr>
                                @endforeach
                           
                            </tbody>
                        </table>
                        <a href="{{route('post.create')}}" class="btn btn-info">Create Post</a>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
</div>
@endsection


