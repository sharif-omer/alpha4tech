<section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>{{ __('messages.contact_title')}}</h2>
        <h3>{{ __('messages.contact_title')}} <span>{{ __('messages.contact_span')}}</span></h3>
        <p>{{ __('messages.contact_description')}}</p>
      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="row mt-5">

        <div class="col-lg-4">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>{{ __('messages.location')}}: </h4>
              <p>{{ __('messages.contact_location')}}</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>{{ __('messages.contact_call')}}:</h4>
              <p>+1 5589 55488 55</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>{{ __('messages.contact_email')}}:</h4>
              <p>alpha@tech.com</p>
            </div>
          </div>

        </div>

        <div class="col-lg-8 mt-5 mt-lg-0">

          <form action="{{route('contact.store')}}" method="POST" role="form">
            @csrf
            <div class="row">
              <div class="col-md-6 form-group mb-3">
                <input type="text" name="name" class="form-control" id="name" placeholder="{{ __('messages.form_name')}}" value="{{old('name')}}">
                  @error('name')
                  <div class="alert alert-danger">
                    {{ $message }}
                  </div>
                 @enderror
              </div>
              <div class="col-md-6 form-group mb-2 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="{{ __('messages.form_email')}}" required value="{{old('email')}}">
                  @error('email')
                  <div class="alert alert-danger">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              
              <div class="col-md-12 form-group mt-3 mt-md-0">
                <input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="{{ __('messages.form_number')}}" required value="{{old('phone_number')}}">
                  @error('phone_number')
                  <div class="alert alert-danger">
                    {{ $message }}
                  </div>
                @enderror
              </div>

              {{-- <div class="col-md-6 form-group mt-2 mt-md-0">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="{{ __('messages.form_subject')}}" required value="{{old('subject')}}">
                  @error('subject')
                  <div class="alert alert-danger">
                    {{ $message }}
                  </div>
                @enderror
              </div> --}}
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="اكتب رسالتك" required> {{old('message')}} 
              </textarea>
            </div>
            <br>
            
            <div class="p-3">
              <div class=""><button type="submit" class="btn btn-primary waves-effect waves-light">{{ __('messages.form_send')}}</button></div>
          </div>
          </form>

        </div>

      </div>
  
    </div>
  </section>