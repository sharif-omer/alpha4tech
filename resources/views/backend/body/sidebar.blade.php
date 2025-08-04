@php
    $photo = 
    Auth::user()->profile_image;
    $imagePath = public_path('upload/admin_images/' . $photo);
    $imageUrl = ($photo && file_exists($imagePath) )
    ? asset('upload/admin_images/' .$photo)
    : asset('upload/no_image.jpg');

@endphp

<div class="vertical-menu">
    <div data-simplebar class="h-100">

        <!-- User details -->
        <div class="user-profile text-center mt-3">
            <div class="">
                <img src="{{ $imageUrl }}" alt="" class="avatar-md rounded-circle">
            </div>
            <div class="mt-3">
                <h4 class="font-size-16 mb-1">{{Auth::user()->name}}</h4>
                <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i>Online</span>
            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{route('dashboard')}}" class="waves-effect">
                        <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
                        <span>Dashboard</span>
                    </a>

                    <a href="{{route('team.index')}}" class="">
                        <i class="ri-dashboard-line"></i>
                        {{-- <span class="badge rounded-pill bg-success float-end">3</span> --}}
                        <span>Mage Team</span>
                    </a>

                    <a href="{{route('services.index')}}" class="">
                        <i class="ri-dashboard-line"></i>
                        {{-- <span class="badge rounded-pill bg-success float-end">3</span> --}}
                        <span>Services</span>
                    </a>

                    <a href="{{route('dashboard')}}" class="">
                        <i class="ri-dashboard-line"></i>
                        {{-- <span class="badge rounded-pill bg-success float-end">3</span> --}}
                        <span>Dashboard</span>
                    </a>

                    <a href="{{route('post.index')}}" class="">
                        <i class="ri-dashboard-line"></i>
                        {{-- <span class="badge rounded-pill bg-success float-end">3</span> --}}
                        <span>Post</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Home Slide Setup</span>
                    </a>

                    <a href="{{route('team.index')}}" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Manage Team</span>
                    </a>

                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('team.index')}}">Manage Team</a></li>
                        {{-- <li><a href="{{route('contact.index')}}">Contact Page</a></li> --}}
                        <li><a href="{{route('post.index')}}">Posts</a></li>
                        <li><a href="{{route('services.index')}}">Services</a></li>
                    </ul>
                </li>

                <li class="menu-title">Pages</li>

                 <li> 
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-account-circle-line"></i>
                        <span>Authentication</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="auth-login.html">Login</a></li>
                        <li><a href="auth-register.html">Register</a></li>
                        <li><a href="auth-recoverpw.html">Recover Password</a></li>
                        <li><a href="auth-lock-screen.html">Lock Screen</a></li>
                    </ul>
                </li> 

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>