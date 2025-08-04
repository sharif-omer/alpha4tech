{{-- @extends('frontend.main_master') --}}
@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="card border-primary">
          <img src="https://example.com/image.jpg" class="card-img-top img-fluid" alt="Image title">
          <div class="card-body text-center">
              <h1 class="card-title">{{ $post->title }}</h1>
              <p class="card-text">{{ $post->content }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
 {{-- @endsection  --}}


    
