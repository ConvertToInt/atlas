@extends('layout')

@section('head')

@endsection

@section('content')

<div class="columns is-centered has-background-white-bis">
    <div class="column is-8">
        <div class="box mt-6 mb-6" style="border-radius:15px">
            <h1 class="title has-text-centered has-text-weight-bold has-text-grey-darker pt-3 mb-6 mt-6 font-sm sizeable"><em>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas, rem?</em></h1>
        
            <div class="columns is-centered">   
              <div class="column is-10">
                  <h1 class="has-text-centered has-text-grey-darker mb-6 mt-6 ml-6 mr-6 font-sm sizeable">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus vel maxime officiis qui dolores doloremque. Dolor doloribus ducimus magni magnam aperiam neque facilis doloremque repellat at consectetur, voluptas dolorum laboriosam ratione suscipit, consequatur repudiandae vel natus commodi molestias unde veritatis iure placeat sunt. Officiis, neque at dignissimos sed dolorem quas?</h1>
               </div>
            </div>
        
            <h1 class="title has-text-centered has-text-weight-bold has-text-grey-darker mb-6 mt-6 font-sm sizeable">Session time: <em>{{$service->length}}</em></h1>
        
            <h1 class="title has-text-centered has-text-weight-bold has-text-grey-darker pt-6 mb-6 mt-6 font-sm sizeable"><a href="{{route('contact')}}" style="color:#d53021 !important; border-bottom:3px solid #d53021; padding-bottom:5px;">To book a service - follow this link to our contact page.</a></h1>
        </div>
    </div>
</div>


{{-- <div class="mt-6 has-text-centered mb-6">
    <form method ="POST" action='{{route('service_delete', $service->id)}}'>
        @csrf
        @method('delete')
        <button type="submit" class="button is-danger">Delete Post</button>
    </form>
</div> --}}

@endsection