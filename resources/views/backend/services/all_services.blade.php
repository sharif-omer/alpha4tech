@php
   $services_data = App\Models\Services::get();
@endphp 
  
<section id="services" class="services">
   <div class="container">
      <div class="section-title">
        <h2>{{ __('messages.services')}}</h2>
        <h3>{{ __('messages.sevices_heading')}} <span>{{ __('messages.sevices_span')}}</span></h3>
        <p>{{ __('messages.sevices_description')}}</p>
      </div>
      <div class="row">
          @foreach ($services_data as $item)
             <div class="col-md-3">
                <div class="icon-box">
                    {{-- <div class="icon"><i class="bx bxl-dribbble"></i></div> --}}
                    <div class="icon"><i class="bx bxl-dribbble"></i></div>
                    <h4 class="title"><a href="">{{$item->title}}</a></h4>
                    <p class="description">{{$item->description}}</</p>
                </div>
            </div>
            @endforeach
      </div>
    </div>
</section>

            