@php
    $post = App\Models\Posts::paginate(1);
@endphp
<section id="posts" class="posts">
<div class="section-title">
    <h2>Posts</h2>
    <h3>Latest <span>Posts</span></h3>
    <p>This is Prograph</p>
</div> 
 <div class="container">
  <div class="row">
    @foreach ($post as $item)
      <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">{{ $item->title }}</h3>
                <h3 class="card-title"> Created at: <span style="color: blue">{{ $item->created_at }}</span></h3>
                <p class="card-text">{{ $item->content }}</p>
                <img style="width: 200px" src="{{asset('assets/img/portfolio/portfolio-2.jpg')}}" class="card-img-top"  alt="{{ $item->title }}">
            </div>
        </div>
      </div> 
      @endforeach 
      {{$post->links()}}
    </div>
  </div>
</section>


