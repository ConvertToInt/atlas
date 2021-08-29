<div class="column is-3">
    <div class="card">
        <div class="card-image">
            <figure class="image is-4by3">
            <img src="{{'public/' . $service->img}}" alt="Service image">
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
            <time datetime="2016-1-1"><strong>{{$service->length}}</strong></time>
            </div>
        </div>
    </div>
</div>