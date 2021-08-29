@extends('layout')

@section('head')

@endsection

@section('content')

<div class="columns">
    @foreach($services as $service)
        @include('snippets._service')    
    @endforeach
</div>

<a href="{{route('service_create')}}">Add new service</a>

@endsection