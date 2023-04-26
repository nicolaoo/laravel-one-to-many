@extends('layouts.app')

@section('content')

<div class="container py-4">
    <div class="row justify-content-between">
        <div class="col-auto">
            <h3>{{ $project->title}}</h3>

        </div>
        <div class="col-auto">
            <a class="btn btn-danger" href="{{ route('projects.index') }}">HOME</a>

        </div>

    </div>
</div>

<div class="container py-4">
    <div>

        <td>{{ $project->content}}</td>
    </div>
</div>


@endsection