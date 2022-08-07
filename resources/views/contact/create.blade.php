@extends('layout')

@section('head')

@endsection

@section('content')

<h1 class="title has-text-centered has-text-weight-bold has-text-grey-darker is-size-4 pt-3 mb-6 mt-6 px-5">Want to book or have a question? Contact us below.</h1>

<div class="columns is-centered mt-3 mb-6 px-5">
    <div class="column is-half">

      <!-- Alert User -->
      @if(Session::has('success'))
        <div class="alert alert-success mb-6 is-2">
            {{Session::get('success')}}
        </div>
      @endif
      
        <form method="post" action="{{route('contact_store')}}">
          
          @csrf

          <div class="field">
            <label class="label">Full Name <span style="color:red !important">*</span></label>
            <div class="control has-icons-left">
              <input class="input @error('name') is-danger @enderror" type="text" placeholder="Your name..." name="name">
              <span class="icon is-small is-left">
                <i class="fas fa-signature"></i>
              </span>
              @error('name')
                <p class="help is-danger">{{ $errors->first('name') }}</p>
              @enderror
            </div>
          </div>
          
          <div class="field">
            <label class="label">Email <span style="color:red !important">*</span></label>
            <div class="control has-icons-left">
              <input class="input @error('email') is-danger @enderror" type="email" placeholder="Your Email..." name="email" required>
              <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
              </span>
              @error('email')
                <p class="help is-danger">{{ $errors->first('email') }}</p>
              @enderror
            </div>
          </div>

          
            <div class="field is-expanded">
              <label class="label">Phone <span style="color:red !important">*</span></label>
              <div class="field has-addons">
                <div class="control">
                  <a class="button is-static">
                    +44
                  </a>
                </div>
                <div class="control">
                  <input class="input @error('phone') is-danger @enderror" placeholder="Your phone number" type="tel" maxlength="10" name="phone" required>
                  @error('phone')
                    <p class="help is-danger">{{ $errors->first('phone') }}</p>
                  @enderror
                </div>
              </div>
            </div>
          

          <div class="field">
            <label class="label">Subject <span style="color:red !important">*</span></label>
            <div class="control">
              <div class="select @error('subject') is-danger @enderror">
                <select name="subject" required id="subject-select">
                  <option>Select a subject</option>
                  <option>Question</option>
                  <option>Training Booking</option>
                </select>
                @error('subject')
                  <p class="help is-danger">{{ $errors->first('subject') }}</p>
                @enderror
              </div>
            </div>
          </div>

          <div class="optional">
            <div class="field">
              <label class="label">Size <span style="color:red !important">*</span></label>
              <div class="control has-icons-left">
                <input class="input @error('size') is-danger @enderror" type="number" placeholder="How many people is the training for..." name="size" min="1" max="99">
                <span class="icon is-small is-left">
                  <i class="fas fa-users"></i>
                </span>
                @error('size')
                  <p class="help is-danger">{{ $errors->first('size') }}</p>
                @enderror
              </div>
            </div>
            
            <div class="field">
              <label class="label">Workshop selection <span style="color:red !important">*</span></span></label>
              <div class="control">
                <div class="select @error('service') is-danger @enderror">
                  <select name="service">
                    <option>Select a service</option>
                    <option>Training Workshop</option>
                    <option>Presentation</option>
                    <option>In Our World: A Day on the Spectrum</option>
                    <option>Standard Drama Performance</option>
                    <option>Short Drama Performance</option>
                    <option>Custom Scenes</option>
                    <option>Autism Positive Award</option>
                  </select>
                  @error('service')
                    <p class="help is-danger">{{ $errors->first('service') }}</p>
                  @enderror
                </div>
              </div>
            </div>

            <div class="field">
              <label class="label">Date preference <span style="color:red !important">*</label>
              <div class="control">
                <input class="input @error('date') is-danger @enderror" type="date" name="date">
                @error('date')
                  <p class="help is-danger">{{ $errors->first('date') }}</p>
                @enderror
              </div>
            </div>
          </div>

          <div class="field">
            <label class="label">Message <span style="color:red !important">*</span></label>
            <div class="control">
              <textarea class="textarea @error('message') is-danger @enderror" placeholder="Your Message..." name="message" required></textarea>
              @error('message')
                <p class="help is-danger">{{ $errors->first('message') }}</p>
              @enderror
            </div>
          </div>

          <h1 class="title has-text-centered has-text-weight-bold has-text-grey-darker is-size-5 mb-6"><strong>Note:</strong> If you wish to make a booking make sure to mention your establishment, and who the training is for.</h1>

          
          <div class="field is-grouped is-grouped-centered">
            <div class="control">
              <button class="button is-secondary">Submit Enquiry</button>
            </div>
          </div>

        </form>
    </div>
</div>

<div class="has-text-centered mt-6 px-6 is-size-6 mb-6"><p><strong class="has-text-danger">COVID-19 RESPONSE<strong></p><br>
  Due to COVID-19, we have had to delay some of our services being reintroduced which we provided previously. However, we are looking forward to bringing things back slowly and surely! Currently, we are not currently performing any scenes of the play at this moment in, however, this will change soon.
  
  We are also able to facilitate our other sessions online. We have done everything we can to ensure you still have a great training experience with us, and hope to have things running as normal soon.
  
  Since the workshops will be available online, we are happy to host sessions for international audiences, however, please do get in touch with us at [email address] so we can discuss any potential adaptations to suit your requirements.
  
  If you have any enquiries, please get in touch with us at autismatlasltd@gmail.com.
</div>

<script>
  $(document).ready(function () {
    $('#subject-select').change( function() {
      if($(this).val() == 'Training Booking'){
        $(".optional").show();
      } else {
        $(".optional").hide();
      }
    });
  });
</script>

@endsection