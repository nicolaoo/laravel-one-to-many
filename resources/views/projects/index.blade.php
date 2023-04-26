@extends('layouts.app')

@section('content')

<div class="container py-4">
    <div class="row justify-content-between">
        <div class="col-auto">
            <h1>I miei Progetti</h1>

        </div>
        <div class="col-auto">
            <a class="btn btn-danger" href="{{ route('projects.create') }}">Nuovo progetto</a>
        </div>

    </div>
</div>

<div class="container py-4">
    <div class="grid-proj">
        @foreach($projects as $project)
        <div class="card-proj">
            <h2>
                {{ $project->title }}
            </h2>

            <p>
                {{$project->content ? $project->content : 'nessun contenuto'}}
            </p>
        </div>
        @endforeach
    </div>
</div>


<style>
    .grid-proj {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        gap: 20px;
    }
</style>


@endsection