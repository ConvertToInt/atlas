@extends('layout')

@section('head')

@endsection

@section('content')

<div class="columns is-centered mt-6 mb-6">
    <div class="column is-8 has-text-centered px-5">
        <div class="box" style="background:hsl(0, 0%, 95%)">
            <div class="columns">
                <div class="column is-2 is-left">
                    <figure class="image is-128x128 is-inline-block">
                        <img src="{{ asset('kira.png') }}">
                      </figure>
                </div>
                <div class="column has-text-weight-bold has-text-grey-darker">
                    <h1 class="title is-size-3 pt-3 mt-4">Kira McCarthy</h1>
                    <h1 class="title is-size-5">Co-Founder &middot; Trainer &middot; Funny</h1>
                </div>
            </div>
        </div>
        <div class="box" style="background:hsl(0, 0%, 95%)">
            <div class="columns">
                <div class="column is-2 is-left">
                    <figure class="image is-128x128 is-inline-block">
                        <img src="{{ asset('alannah.png') }}">
                      </figure>
                </div>
                <div class="column has-text-weight-bold has-text-grey-darker">
                    <h1 class="title is-size-3 pt-3 mt-4">Kira McCarthy</h1>
                    <h1 class="title is-size-5">Co-Founder &middot; Trainer &middot; Funny</h1>
                </div>
            </div>
        </div>
        <div class="box" style="background:hsl(0, 0%, 95%)">
            <div class="columns">
                <div class="column is-2 is-left">
                    <figure class="image is-128x128 is-inline-block">
                        <img src="{{ asset('greg.jpeg') }}">
                      </figure>
                </div>
                <div class="column has-text-weight-bold has-text-grey-darker">
                    <h1 class="title is-size-3 pt-3 mt-4">Kira McCarthy</h1>
                    <h1 class="title is-size-5">Co-Founder &middot; Trainer &middot; Funny</h1>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection