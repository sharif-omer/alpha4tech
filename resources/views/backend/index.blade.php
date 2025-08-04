@php
    $photo = 
    Auth::user()->profile_image;
    $imagePath = public_path('upload/admin_images/' . $photo);
    $imageUrl = ($photo && file_exists($imagePath) )
    ? asset('upload/admin_images/' .$photo)
    : asset('upload/no_image.jpg');
@endphp

@extends('backend.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">
    
        <!DOCTYPE html>
{{-- <html lang="ar" dir="rtl"> --}}
<head>
    
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
</head>
<body>
    <div class="dashboard-container">
        <!-- Header Section -->
        <div class="dashboard-header d-flex justify-content-between align-items-center">
            <div class="text-center">
                <h1 class="mb-0"><i class="fas fa-envelope me-2"></i>Contact Messages</h1>
                <p class="mb-0 mt-2 opacity-75">Manage all incoming messages from the contact form</p>
            </div>
            <div class="d-flex align-items-center">
                <div class="me-4 text-end">
                    <p class="mb-0">Welcome: <span class="text-info">{{Auth::user()->name}}</span></p>
                    <small class="opacity-75">Last active: 9Am</small>
                </div>
                <div class="avatar bg-white text-dark rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; font-weight: bold;">
                    A
                </div>
            </div>
        </div>
    </div>
        <!-- Stats Cards -->
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="stats-card text-center">
                    <div class="stats-number">{{ count($contacts) }}</div>
                    <div class="stats-label">Total Messages</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-card text-center">
                    <div class="stats-number">{{ $contacts->where('read', 0)->count() }}</div>
                    <div class="stats-label">New Messages</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-card text-center">
                    <div class="stats-number">{{ $contacts->where('replied', 1)->count() }}</div>
                    <div class="stats-label">Replied</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stats-card text-center">
                    <div class="stats-number">{{ $contacts->where('archived', 1)->count() }}</div>
                    <div class="stats-label">Archived</div>
                </div>
            </div>
        </div>
        
        <!-- Messages Table -->
        <div class="card mt-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Message Menu</h5>
                <div>
                    <button class="btn btn-sm btn-outline-secondary me-2">
                        <i class="fas fa-filter me-1"></i>Order
                    </button>
                    <button class="btn btn-sm btn-outline-primary">
                        <i class="fas fa-sync-alt me-1"></i>Update
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover" id="table1">
                        <thead class="bg-light">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i = 1)
                            @foreach ($contacts as $item)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->phone_number }}</td>
                                <td>{{ $item->subject}}</td>
                                <td class="message-preview">{{ $item->message }}</td>
                                <td>
                                    <form action="{{ route('contact.destroy', $item->id) }}" method="POST" onsubmit="return confirm('هل أنت متأكد من رغبتك في حذف هذه الرسالة؟');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-delete">
                                            <i class="fas fa-trash me-1"></i>Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
                <div class="d-flex justify-content-between align-items-center mt-4">
                    <div class="d-flex">
                        <button class="btn btn-sm btn-outline-primary me-2">
                            <i class="fas fa-file-excel me-1"></i>Export Excel
                        </button>
                        <button class="btn btn-sm btn-outline-primary">
                            <i class="fas fa-print me-1"></i>Printe
                        </button>
                    </div>
                    
                    {{-- <a href="{{ route('dashboard') }}" class="btn btn-back px-4">
                        <i class="fas fa-arrow-left me-2"></i> رجوع
                    </a> --}}
                </div>
            </div>
        </div>
        
        <div class="footer">
            <p class="mb-0">© {{ date('Y') }} لوحة التحكم - جميع الحقوق محفوظة</p>
            <small>آخر تحديث: {{ now()->format('Y-m-d H:i') }}</small>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Add hover effect to message preview
        document.querySelectorAll('.message-preview').forEach(item => {
            // Set title for the full message
            item.setAttribute('title', item.textContent);
            
            item.addEventListener('click', function() {
                alert('عرض الرسالة الكاملة:\n\n' + this.textContent);
            });
        });
    </script>
</body>
</html>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dropdown float-end">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                            </div>
                        </div>

                        <h4 class="card-title mb-4">Latest Transactions</h4>

                        <div class="table-responsive">
                            <table class="table table-centered mb-0 align-middle table-hover table-nowrap">
                                <thead class="table-light">
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Status</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th style="width: 120px;">Salary</th>
                                    </tr>
                                </thead><!-- end thead -->
                                <tbody>
                                    <tr>
                                        <td><h6 class="mb-0">Charles Casey</h6></td>
                                        <td>Web Developer</td>
                                        <td>
                                            <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active</div>
                                        </td>
                                        <td>
                                            23
                                        </td>
                                        <td>
                                            04 Apr, 2021
                                        </td>
                                        <td>$42,450</td>
                                    </tr>
                                     <!-- end -->
                                     <tr>
                                        <td><h6 class="mb-0">Alex Adams</h6></td>
                                        <td>Python Developer</td>
                                        <td>
                                            <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-warning align-middle me-2"></i>Deactive</div>
                                        </td>
                                        <td>
                                            28
                                        </td>
                                        <td>
                                            01 Aug, 2021
                                        </td>
                                        <td>$25,060</td>
                                    </tr>
                                     <!-- end -->
                                     <tr>
                                        <td><h6 class="mb-0">Prezy Kelsey</h6></td>
                                        <td>Senior Javascript Developer</td>
                                        <td>
                                            <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active</div>
                                        </td>
                                        <td>
                                            35
                                        </td>
                                        <td>
                                            15 Jun, 2021
                                        </td>
                                        <td>$59,350</td>
                                    </tr>
                                     <!-- end -->
                                     <tr>
                                        <td><h6 class="mb-0">Ruhi Fancher</h6></td>
                                        <td>React Developer</td>
                                        <td>
                                            <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active</div>
                                        </td>
                                        <td>
                                            25
                                        </td>
                                        <td>
                                            01 March, 2021
                                        </td>
                                        <td>$23,700</td>
                                    </tr>
                                     <!-- end -->
                                     <tr>
                                        <td><h6 class="mb-0">Juliet Pineda</h6></td>
                                        <td>Senior Web Designer</td>
                                        <td>
                                            <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active</div>
                                        </td>
                                        <td>
                                            38
                                        </td>
                                        <td>
                                            01 Jan, 2021
                                        </td>
                                        <td>$69,185</td>
                                    </tr>
                                     <!-- end -->
                                     <tr>
                                        <td><h6 class="mb-0">Den Simpson</h6></td>
                                        <td>Web Designer</td>
                                        <td>
                                            <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-warning align-middle me-2"></i>Deactive</div>
                                        </td>
                                        <td>
                                            21
                                        </td>
                                        <td>
                                            01 Sep, 2021
                                        </td>
                                        <td>$37,845</td>
                                    </tr>
                                     <!-- end -->
                                     <tr>
                                        <td><h6 class="mb-0">Mahek Torres</h6></td>
                                        <td>Senior Laravel Developer</td>
                                        <td>
                                            <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active</div>
                                        </td>
                                        <td>
                                            32
                                        </td>
                                        <td>
                                            20 May, 2021
                                        </td>
                                        <td>$55,100</td>
                                    </tr>
                                     <!-- end -->
                                </tbody><!-- end tbody -->
                            </table> <!-- end table -->
                        </div>
                    </div><!-- end card -->
                </div><!-- end card -->
            </div>
                                      
                    </div>
                </div><!-- end card -->
            </div><!-- end col -->
        </div>
        <!-- end row -->
    </div>
    
</div>

@endsection