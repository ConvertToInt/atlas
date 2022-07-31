@extends('layout')

@section('head')

@endsection

@section('content')

<h1 class="title has-text-centered has-text-weight-bold has-text-grey-darker is-size-3 pt-3 mb-6 mt-6 px-5"><em>Autism training from a unique but necessary perspective.</em></h1>

<div class="columns is-centered">
    <div class="column is-8 px-5"  style="text-align:center">

        <p>We offer bespoke training workshops to audiences of all backgrounds - from teachers, to students, to employees, to employers, in all sectors.</p><br>
            
        <p>We believe that it's important for people across all walks 
            of life to have the chance to gain a more in depth understanding of autism. Autism friendly communities, ultimately, are people friendly communities since  many of the small adjustments that are recommended are about 
            looking out for individual needs. You may even find that some of the strategies we suggest can also help non-autistic individuals, and maybe, yourself!</p><br>

        <p>All the information we provide our sessions are backed up by current research, although, depending on the workshop we will provide more in-depth material on certain topics.</p><br>
            
        <p> Once we are informed of who will be attending our sessions (whatever profession it may be), we will do our best to highlight specific strategies and scenarios that will be relevant to the attendees.<p><br>

        <h1 class="title has-text-centered has-text-weight-bold has-text-grey-darker is-size-3 pt-3 mt-6">Our Services</h1>
    </div>
</div>

<div class="columns is-centered mt-6 mb-6 px-5">
    <div class="column is-8">
        <div class="columns is-multiline">
            @foreach($services as $service)
                @include('snippets._service')    
            @endforeach
        </div>
    </div>
</div>


<div class="modal">
    <div class="modal-background"></div>
    <div class="modal-card">
      <header class="modal-card-head">
        <p class="modal-card-title">{{$service->name}}</p>
        <button class="delete" aria-label="close"></button>
      </header>
      <section class="modal-card-body">
        <img src="{{$service->img}}" alt="Service image">

        {{$service->desc}}
      </section>
    </div>
  </div>

  <h1 class="mb-6 mt-6 px-5 has-text-centered is-size-5"><a href="{{route('contact')}}" style="color:#d53021 !important; border-bottom:3px solid #d53021; padding-bottom:5px;">To book a service - follow this link to our contact page.</a></h1>


<div class="mt-6 mb-6 has-text-centered">
    <a class="button" href="{{route('service_create')}}">Add new service</a>
</div>

<script>
    $(document).ready(function() {

        $('.service-desc').hide();

        $(".service").click(function(event) {
            $("#" + event.target.id + "-desc").toggle();
        });
});
</script>

@endsection