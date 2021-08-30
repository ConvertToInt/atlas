@extends('layout')

@section('head')

@endsection

@section('content')

{{$service->id}}

<div class="mt-6 has-text-centered">
    <form method ="POST" action='{{route('service_delete', $service->id)}}'>
        @csrf
        @method('delete')
        <button type="submit" class="button is-danger">Delete Post</button>
    </form>
</div>
@endsection