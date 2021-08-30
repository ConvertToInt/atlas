@extends('layout')

@section('head')

@endsection

@section('content')

<div class="columns is-centered mt-6">
    <div class="column is-8">
        <div class="columns is-multiline">
            @foreach($services as $service)
                @include('snippets._service')    
            @endforeach
        </div>
    </div>
</div>

<div class="mt-6 has-text-centered">
    <a class="button" href="{{route('service_create')}}">Add new service</a>
</div>
@endsection