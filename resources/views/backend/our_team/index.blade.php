
@extends('backend.admin_master')
@section('admin')

{{-- @extends('backend.admin_master')
@section('admin') --}}

{{-- <div class="container mt-5 pt-3">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">فريق العمل</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach($team_data as $item)
                        <div class="col-md-4 mb-4">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-img-top position-relative overflow-hidden" style="height: 250px;">
                                    @if($item->team_image)
                                    <img src="{{ asset($item->team_image) }}" 
                                         alt="{{ $item->name }}"
                                         class="img-fluid h-100 w-100 object-fit-cover">
                                    @else
                                    <div class="bg-light d-flex align-items-center justify-content-center h-100">
                                        <i class="fas fa-user fa-5x text-muted"></i>
                                    </div>
                                    @endif
                                </div>
                                
                                <div class="card-body text-center">
                                    <h5 class="card-title fw-bold">{{ $item->name }}</h5>
                                    <p class="text-muted mb-3">{{ $item->current_position }}</p>
                                    
                                    <div class="d-flex justify-content-center gap-3">
                                        @if($item->facebook_url)
                                        <a href="{{ $item->facebook_url }}" target="_blank" class="btn btn-primary btn-circle">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        @endif
                                        
                                        @if($item->linkedin_url)
                                        <a href="{{ $item->linkedin_url }}" target="_blank" class="btn btn-info btn-circle">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}




<style>
    .dashboard-header {
        background: linear-gradient(135deg,#2c3e50, #1a2530);
        color: white;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 25px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    .card {
        border-radius: 12px;
        border: none;
        box-shadow: 0 8px 20px rgba(0,0,0,0.08);
        transition: transform 0.3s, box-shadow 0.3s;
        overflow: hidden;
    }
    
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 25px rgba(0,0,0,0.15);
    }
    
    .card-header {
        background: linear-gradient(to right, #f8f9fa, #e9ecef);
        border-bottom: 1px solid #e0e0e0;
        padding: 15px 20px;
        font-weight: 600;
        color: #2c3e50
    }
    
    .table-responsive {
        border-radius: 10px;
        overflow: hidden;
    }
    
    .table thead {
        background: linear-gradient(to right, #3498db, #2980b9);
        color: white;
    }
    
    .table th {
        font-weight: 600;
        padding: 15px;
        text-align: center;
    }
    
    .table td {
        padding: 12px 15px;
        vertical-align: middle;
        border-bottom: 1px solid #e0e0e0;
    }
    
    .table tr:nth-child(even) {
        background-color: #f9fafb;
    }
    
    .table tr:hover {
        background-color: rgba(52, 152, 219, 0.05);
    }
    
    .btn-back {
        background: linear-gradient(to right, #2c3e50, #34495e);
        border: none;
        border-radius: 8px;
        padding: 10px 25px;
        font-weight: 600;
        transition: all 0.3s;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    
    .btn-back:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 12px rgba(0,0,0,0.15);
    }
    
    .btn-delete {
        background: linear-gradient(to right, #e74c3c, #c0392b);
        border: none;
        border-radius: 6px;
        padding: 8px 15px;
        color: white;
        transition: all 0.3s;
    }
    
    .btn-delete:hover {
        background: linear-gradient(to right, #c0392b, #a5281d);
        transform: scale(1.05);
    }
    
    .message-preview {
        max-width: 250px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        cursor: pointer;
        transition: all 0.3s;
    }
    
    .message-preview:hover {
        color: #3498db;
        text-decoration: underline;
    }
    
    .stats-card {
        background: white;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    }
    
    .stats-number {
        font-size: 2.2rem;
        font-weight: 700;
        color: #3498db;
    }
    
    .stats-label {
        color: #666;
        font-weight: 500;
    }
    
    .footer {
        text-align: center;
        padding: 20px;
        color: #777;
        margin-top: 30px;
        border-top: 1px solid #e0e0e0;
    }
    
    @media (max-width: 768px) {
        .table-responsive {
            border: 1px solid #e0e0e0
        }
        
        .table thead {
            display: none;
        }
        
        .table, .table tbody, .table tr, .table td {
            display: block;
            width: 100%;
        }
        
        .table tr {
            margin-bottom: 15px;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            overflow: hidden;
        }
        
        .table td {
            text-align: right;
            position: relative;
            padding-left: 50%;
        }
        
        .table td::before {
            content: attr(data-label);
            position: absolute;
            left: 15px;
            font-weight: bold;
            color: #2c3e50
        }
    }
</style>
<body> 

<div class="container mt-5 pt-5">
    <div class="card shadow">
        
        <div class="card-header bg-primary text-white py-3 d-flex justify-content-between">
            <h4 class="mb-0 text-center">
                <i class="fas fa-users me-2"></i>Team Menu
            </h4>
          
            <button class="btn btn-info">

                <a class="text-light" href="{{route('team.create')}}">Add Member</a>
            </button>

        </div>
    
        <div class="card-body">
            <div class="row">
                @foreach ($team_data as $item)

                <!-- العمود الأيسر -->
                <div class="col-md-8">
                    <!-- العنوان -->
                    <div class="mb-4">
                        <h2>Name <span class="text-info">{{$item->name}}</span></h2>
                        <h2> Current Position <span class="text-info">{{$item->current_position}}</span></h2>
                    </div> 
                    <!-- المحتوى -->
                    <div class="mb-4">
                        <h4 class="border-bottom pb-2">Social Media Links</h4>
                        <div class="mt-3">
                            
                         </div>

                        <div class="mt-3">
                            Facebook Url:
                           <a href="{{$item->facebook_url}}">{{$item->facebook_url}}</a> 
                         </div>

                          
                        <div class="mt-3">
                            Instgram Url:
                           <a href="{{$item->instgram_url}}">{{$item->instgram_url}}</a> 
                         </div>

                         
                        <div class="mt-3">
                            Linkdin Url:
                           <a href="{{$item->linkdin_url}}">{{$item->linkdin_url}}</a> 
                         </div>
                    </div>
                </div>
                
                <!-- العمود الأيمن -->
                <div class="col-md-4">
                    <!-- صورة الخبر -->
                    <div class="mb-4">
                        <h4 class="border-bottom pb-2">Image Memeber</h4>
                        <div class="mt-3 text-center">
                            @if($item->team_image)
                                <img src="{{asset('storage/' .$item->team_image) }}" class="img-fluid rounded shadow" alt="team image ">
                            @else
                                <div class="bg-light p-5 text-center rounded">
                                    <i class="fas fa-image fa-3x text-muted mb-3"></i>
                                    <p class="text-muted">No found Image</p>
                                </div>
                            @endif
                        </div>
                    </div>
                    <!-- إجراءات -->
                    <div class="card border-0 shadow-sm mb-3">
                        <div class="card-body">
                            <div class="d-grid gap-2">
                                 {{-- <span>{{$item->facebook_url}}</span>
                                 <span>{{$item->instgram_url}}</span>
                                 <span>{{$item->linkdin_url}}</span> --}}
                                {{-- <a href="{{ route('slider.create') }}" class="btn btn-success">
                                    <i class="fas fa-plus-circle me-2"></i>  إضافة شريحة جديدة
                                </a> --}}
                                <a href="{{ route('team.edit', $item->id) }}" class="btn btn-primary">
                                    <i class="fas fa-edit me-2"></i>Edit Information
                                </a>
                               
                                 <form action="{{ route('team.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger w-100" onclick="return confirm('هل أنت متأكد من الحذف؟')">
                                        <i class="fas fa-trash me-2"></i>Delete Memeber
                                    </button>
                                </form>
                                {{-- <a href="{{ route('dashboard') }}" class="btn btn-secondary">
                                    <i class="fas fa-arrow-left me-2"></i> العودة للقائمة
                                </a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                @endforeach
            </div>
        </div>
    </div> 
 </div>
</body> 

@endsection


{{-- <div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title"> Our Team</h4><br> <br>
                       
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead style="background-color: #17d; color:white">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Current Position</th>
                                <th>Facebook Url</th>
                                <th>Istgram Url</th>
                                <th>Linkedin Url</th>
                                <th>Twitter Url</th>
                                <th>Image</th>
                                <th>a ction</th>
                            </tr>
                            </thead>

                            <tbody>
                                @php($i = 1)
                                @foreach ($team_data as $item)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->current_position}}</td>
                                    <td>{{$item->facebook_url}}</td>
                                    <td>{{$item->instgram_url}}</td>
                                    <td>{{$item->linkdin_url}}</td>
                                    <td>{{$item->twitter_url}}</td>
                                    <td>{{$item->image}} </td>
                                    

                                 <td>

                                    <a href="{{route('our_team.edit', $item->id)}}" class="btn btn-info sm" title="Edit Data" > <i class="fas fa-edit"></i> </a>

                                    <a href="{{route('our_team.destroy', $item->id)}}" class="btn btn-danger sm" title="Delete Data" id="delete"> <i class="fas fa-trash-alt">
                                        </i> 
                                    </a>



                                  
                                    </td>                                   
                                </tr>
                                @endforeach
                           
                            </tbody>
                        </table>
                        <a href="{{route('our_team.create')}}" class="btn btn-info">Add Person To Team</a>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
</div> --}}


{{-- @endsection --}}
