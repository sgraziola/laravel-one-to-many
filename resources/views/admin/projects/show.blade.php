@extends('layouts.app')

@section('content')

<div class="container py-5">
    <div class="d-flex gap-4">
        @if ($project->thumb)
        <img class="img-fluid" src="{{asset('storage/' . $project->thumb)}}" alt="{{$project->title}}">
        @else
        <div class="placeholder-glow p-5 placeholder-md bg-primary">Placeholder</div>
        @endif
        <div class="details">
            <h2>{{$project->title}}</h2>

            <div class="language">
                Linguaggio usato: {{$project->language}}
            </div>

        </div>
    </div>
</div>


@endsection