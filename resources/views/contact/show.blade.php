@extends('layout')

@section('head')

@endsection

@section('content')

<h1 class="title has-text-centered has-text-weight-bold has-text-grey-darker is-size-3 pt-3 mb-6">Want to book or have a question? Contact us below.</h1>

<div class="columns is-centered mt-3">
    <div class="column is-half">

      <!-- Alert User -->
      @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
      @endif
      
        <form method="post" action="{{route('contact_store')}}">
          
          @csrf

          <div class="field">
            <label class="label">Name</label>
            <div class="control">
              <input class="input" type="text" placeholder="Your name..." name="name">
            </div>
          </div>
          
          <div class="field">
            <label class="label">Email</label>
            <div class="control has-icons-left has-icons-right">
              <input class="input" type="email" placeholder="Your Email..." name="email">
              <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
              </span>
            </div>
          </div>
          
          <div class="field">
            <label class="label">Subject</label>
            <div class="control">
              <div class="select" name="subject">
                <select>
                  <option>Choose a subject</option>
                  <option>Question</option>
                  <option>Training Booking</option>
                </select>
              </div>
            </div>
          </div>
          
          <div class="field">
            <label class="label">Message</label>
            <div class="control">
              <textarea class="textarea" placeholder="Your Message..." name="message"></textarea>
            </div>
          </div>

          <h1 class="title has-text-centered has-text-weight-bold has-text-grey-darker is-size-5 pt-3 mb-6"><strong>Note:</strong> If you wish to make a booking make sure to mention your establishment, and who the training is for.</h1>

          
          <div class="field is-grouped">
            <div class="control">
              <button class="button is-link">Submit</button>
            </div>
          </div>

        </form>
    </div>
</div>
@endsection