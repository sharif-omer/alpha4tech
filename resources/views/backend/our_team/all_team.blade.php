 @php
    $team_data = App\Models\Team::get();
@endphp 

<section id="team" class="team">
    <div class="container">
        <div class="section-title">
            <h2>{{ __('messages.team_title')}}</h2>
            <h3>{{ __('messages.team_heading')}}<span>{{ __('messages.team_span')}}</span></h3>
            <p>{{ __('messages.team_description')}}</p>
       </div> 
       
        <div class="row">
          @foreach ($team_data as $item)
            <div class="col-md-4">
              <div class="member">
                <div class="member-img">
                  <img src="{{asset('storage/' .$item->team_image)}}" class="img-fluid" alt="">
                    <div class="social">
                        <a href="{{$item->twitter_url}}" aria-label="Twitter" target="_blank"><i class="bi bi-twitter"></i></a>
                        <a href="{{$item->facebook_url}}" aria-label="Facebook" target="_blank"><i class="bi bi-facebook"></i></a>
                        <a href="{{$item->instgram_url}}" aria-label="Instagram" target="_blank"><i class="bi bi-instagram"></i></a>
                        <a href="{{$item->linkdin_url}}" aria-label="Linkedin" target="_blank"><i class="bi bi-linkedin"></i></a>
                        {{-- <a href="">More</a> --}}
                    </div>
                </div>

             <div class="member-info">
              <h4>{{$item->name}}</h4>
              <span>{{$item->current_position}}</span> 
            </div>
           </div>
         </div>
          @endforeach
        </div>
      </div>    
    </section>

 
   