<div class="column is-12">
    <div class="box has-background-white-ter">
        <div class="columns is-mobile">
            <div class="column is-11">
                {{$service->title}}
            </div>
            <div class="column is-1">
                <i class="fas fa-arrow-down is-size-5 service is-clickable" style="float:right"  id="{{$service->id}}"></i>
            </div>
        </div>
        <div class="columns">
            <div class="column service-desc has-text-weight-light" id="{{$service->id}}-desc" style="border-top:1px solid rgb(216, 216, 216)">
                <div class="columns">
                    <div class="column is-3">
                        <p class="mt-6"> Length:  {{$service->length}} </p>
                    </div>
                    <div class="column is-9">
                        {{$service->desc}}
                    </div>
                </div>
                <p class="is-size-6">
                    
                </p><br>
                
            </div>
        </div>
    </div>
</div>