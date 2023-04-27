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
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">contenuto</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
            <tr>
                <td>{{ $project->id}}</td>
                <td>
                    <h3>
                        <a href="{{ route('projects.show', $project ) }}">
                            {{ $project->title}}
                        </a>
                    </h3>
                </td>
                <td>{{ $project->content ? $project->content : 'NESSUN CONTENUTO'}}</td>
                <td><a class="btn btn-secondary" href="{{ route('projects.edit', $project) }}">Modifica</a></td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>



@endsection