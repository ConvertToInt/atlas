<div class="column is-4">
    <a href="{{route('service_show', $service->title)}}">
        <div class="card hoverable" id="{{$service->title}}">
            <div class="card-image">
                <figure class="image is-4by3">
                <img src="{{url('storage/' . $service->img)}}" alt="Service image">
                </figure>
            </div>
            <div class="card-content">
                <div class="media">
                <div class="media-content">
                    <p class="title is-4">{{$service->title}}</p>
                </div>
                </div>

                <div class="content">
                {{$service->brief}}
                <br><br>
                <strong>{{$service->length}}</strong>
                </div>
            </div>
        </div>
    </a>
</div>