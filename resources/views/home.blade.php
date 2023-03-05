@extends('layout')

@section('head')

@endsection

@section('content')

<section class="hero is-large" id="hero" style="background-color:#e0e0e0 !important; border-bottom:8px dotted hsl(0, 100%, 42%);">
    <img class="blank-logo" src="{{ asset('logo_blank.png') }}" alt="atlas logo" >

    <div class="hero-body title has-text-centered is-size-4-mobile is-size-3-tablet is-size-1-desktop" id="hero-txt" style="z-index:2">
        <p style="color:hsl(0, 0%, 18%) !important;">
            Understand Autism From a Unique Perspective.
        </p><br>
        <p style="color:hsl(0, 0%, 18%) !important;">
            How much do you know about autism?
        </p>
    </div>
</section>

<section class="hero is-halfheight" style="background-color:hsl(0, 0%, 92%);border-bottom:8px dotted hsl(34, 98%, 43%)">
    <div class="hero-body">
        <div class="columns">
            <div class="column">
                <p class="title has-text-centered is-size-4-mobile is-size-4-tablet is-size-3-desktop">
                    Autism affects many people across communities around the country. However, many autistic
                    people continue to feel misunderstood, alongside their needs not being met. We want to change
                    things by sharing our own experiences and knowledge so that autistic people and their families
                    feel safe, valued and listened to.
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
        <p class="title has-text-centered is-size-2-mobile is-size-2-tablet is-size-1-desktop">
            Who are we?
        </p>
    </div>
</section>

<section class="hero is-medium" style="background-color:hsl(0, 0%, 92%); border-bottom:8px dotted rgb(0, 150, 0)">
    <div class="hero-body">
        <div class="columns has-text-centered">
            <div class="column">
                <p class="title is-size-4-mobile is-size-5-tablet is-size-4-desktop">
                    Autism ATLAS is an autism-led social enterprise with a training team who want to improve the
                    lives of autistic people through sharing our personal experiences, alongside current research and
                    guidance for good autism practice, to give people a more in-depth understanding of autism.
                </p>
            </div>
            <div class="column pt-6 pb-6">
                <i class="fas fa-book" style="display:flex;align-items:center; justify-content:center; font-size:12em;"></i>
            </div>
            <div class="column">
                <p class="title is-size-4-mobile is-size-5-tablet is-size-4-desktop">
                    We all have different diagnoses (whether it’s autism or Asperger’s Syndrome), different educational backgrounds, 
                    different diagnosis experiences, different ways our autism affects us, different lives. But we all share one thing 
                    in common: we want to share our stories with you, so that you might be able to make a genuine, lasting difference for 
                    someone with autism in your life.
                </p>
            </div>
        </div>
        
    </div>
</section>

<section class="hero is-halfheight" style="background-color:#e0e0e0;">
    <div class="hero-body">
        <div class="columns">
            <div class="column">
                <i class="fas fa-hands-helping" style="display:flex;align-items:center; justify-content:center; font-size:12em;"></i>
            </div>
            <div class="column is-8">
                <p class="title has-text-centered is-size-4-mobile is-size-4-tablet is-size-3-desktop">
                    However, it’s not just about telling people about autism (as much as we enjoy talking about it!). 
                    It's about collaborating with members of communities and working together to help people get the knowledge 
                    they need to help develop their good autism practice.
                </p>
            </div>
        </div>
    </div>
</section>

@endsection