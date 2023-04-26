@extends('layouts.app')

@section('content')

<div class="container">

    <h1>I miei Progetti</h1>
</div>

<div class="container">
    <div class="grid">
        @foreach($projects as $project)
        <div class="card">
            <h2>
                {{ $project->title }}
            </h2>
            <p>
                content
            </p>
        </div>
        @endforeach
    </div>
</div>

<style>
    .grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }
</style>

@endsection