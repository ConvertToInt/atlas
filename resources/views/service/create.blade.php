@extends('layout')

@section('head')

@endsection

@section('content')

<h1 class="title has-text-centered has-text-weight-bold has-text-grey-darker is-size-3 pt-3 mb-6">Create a service</h1>


<div class="columns is-centered mt-3">
    <div class="column is-half">

      <!-- Alert User -->
      @if(Session::has('success'))
        <div class="alert is-primary title has-text-weight-bold is-size-3 pt-3 mb-6">
            {{Session::get('success')}}
        </div>
      @endif
      
        <form method="post" action="{{route('service_store')}}" enctype='multipart/form-data'>
          
          @csrf

          <div class="field">
            <label class="label">Title</label>
            <div class="control">
              <input class="input" type="text" placeholder="Title..." name="title">
            </div>
          </div>
          
          <div class="field">
            <label class="label">Brief</label>
            <div class="control">
              <input class="input" type="text" placeholder="Short Description..." name="brief">
            </div>
            </div>
          
          <div class="field">
            <label class="label">Description</label>
            <div class="control">
              <textarea class="textarea" placeholder="Your Message..." name="desc"></textarea>
            </div>
          </div>

          <div class="field">
            <label class="label">Length</label>
            <div class="control">
              <div class="select">
                <select name="length">
                  <option>Choose a Length</option>
                  <option>15 Mins</option>
                  <option>30 Mins</option>
                  <option>45 Mins</option>
                  <option>1 Hour</option>
                  <option>1-2 Hours</option>
                  <option>2 Hours</option>
                  <option>2-3 Hours</option>
                  <option>3 Hours</option>
                  <option>3-4 Hours</option>
                  <option>1 Day</option>
                  <option>2 Days</option>
                </select>
              </div>
            </div>
          </div>

          <div class="field">
            <label class="label">Image</label>
            <div class="control">
                <input class="input" type="file" name="img">
            </div>
        </div><br>
          
          <div class="field is-grouped">
            <div class="control">
              <button class="button is-secondary">Create Service</button>
            </div>
          </div>

        </form>
    </div>
</div>

@endsection