@extends('layout')

@section('head')

@endsection

@section('content')

{{-- <p class="aligncenter">
    <img class="mt-6" src="logo.jpg" alt="centered image" style="width:40%"/>
</p> --}}

{{-- <h1 class="title has-text-centered has-text-weight-bold has-text-grey-darker pt-3 mb-6" style="font-size:100px">UNDERSTAND AUTISM FROM A UNIQUE PERSPECTIVE.</h1>  --}}

<section class="hero is-large" style="background-color:#e0e0e0; border-bottom:8px dotted hsl(0, 100%, 42%)">
    {{-- <span style="height: 37em; width: 0.70em; background-color: rgb(221, 0, 0); border-radius: 99px; margin: 5em 0 auto 1.75em; position:absolute;"></span> --}}
    <div class="hero-body">
        <p class="title has-text-centered" style="font-size:3.5em">
            Understand Autism From a Unique Perspective.
        </p><br>
        <p class="title has-text-centered" style="font-size:2.5em">
            How much do you know about autism?
        </p>
    </div>
</section>

<section class="hero is-halfheight" style="background-color:hsl(0, 0%, 92%);border-bottom:8px dotted hsl(34, 98%, 43%)">
    {{-- <span style="height: 20em; width: 0.70em; background-color: rgb(221, 151, 0); border-radius: 99px; margin: 2em 0 auto 1.75em; position:absolute;"></span> --}}
    <div class="hero-body">
        <div class="columns">
            <div class="column is-8">
                <p class="title has-text-centered font-sm sizeable">
                    Autism affects many people across communities around the country, however, many people on the spectrum 
                    continue to feel misunderstood and that their needs are not being met. We want to change things by 
                    sharing our own experiences and knowledge so that autistic people and their families feel safe, valued, and listened to.
                </p>
            </div>
            <div class="column">
                <i class="far fa-smile-beam" style="display:flex;align-items:center; justify-content:center; font-size:12em"></i>
            </div>
        </div>
        
    </div>
</section>

<section class="hero is-medium" style="background-color:#e0e0e0; border-bottom:8px dotted hsl(54, 98%, 43%)" id="about">
    <div class="hero-body">
        <p class="title has-text-centered" style="font-size:4.5em">
            Who are we?
        </p>
    </div>
</section>

<section class="hero is-medium" style="background-color:hsl(0, 0%, 92%); border-bottom:8px dotted rgb(0, 150, 0)">
    <div class="hero-body">
        <div class="columns">
            <div class="column">
                <p class="title has-text-centered font-sm">
                    Autism ATLAS is an autism-led social enterprise, with a training team who want to improve the lives of autistic people through sharing 
                    our experiences, alongside current research and guidance for good autism practice, to give people a more in-depth understanding of autism.
                </p>
            </div>
            <div class="column pt-6 pb-6">
                <i class="fas fa-book" style="display:flex;align-items:center; justify-content:center; font-size:12em;"></i>
            </div>
            <div class="column">
                <p class="title has-text-centered font-sm">
                    We all have different experiences, different educational backgrounds, different ways our autism affects us. But we all share one thing 
                    in common: we want to share our stories with you, so that you might be able to make a genuine, lasting difference for 
                    someone with autism.
                </p>
            </div>
        </div>
        
        {{-- <p class="title has-text-centered font-sm">
            We all have different diagnoses (whether it’s autism or Asperger’s Syndrome), different educational backgrounds, different diagnosis experiences, 
            different ways our autism affects us,  different lives. But we all share one thing in common: we want to share our stories with you, so that you might be able to make a genuine, lasting difference for someone with autism in your life.
        </p> --}}
        
    </div>
</section>

<section class="hero is-halfheight" style="background-color:#e0e0e0;">
    <div class="hero-body">
        <div class="columns">
            <div class="column">
                <i class="fas fa-hands-helping" style="display:flex;align-items:center; justify-content:center; font-size:12em;"></i>
            </div>
            <div class="column is-8">
                <p class="title has-text-centered font-sm">
                    However, it’s not just about telling people about autism (as much as we enjoy talking about it!) It's about collaborating with
                     members of communities and working together to help people get the knowledge they need to help develop their good autism practice. 
                </p>
            </div>
        </div>
    </div>
</section>

@endsection