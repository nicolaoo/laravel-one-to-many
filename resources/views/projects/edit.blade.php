@extends('layouts.app')

@section('content')

<div class="container py-4">
    <div class="row justify-content-between">
        <div class="col-auto">
            <h3>Modifica {{ $project->title }}</h3>

        </div>
        <div class="col-auto">
            <a class="btn btn-danger" href="{{ route('projects.index') }}">HOME</a>
        </div>

    </div>
</div>

<div class="container">
    <form action="{{ route('projects.update', $project) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ $project->title }}" id="title">
            {{-- errore title --}}
            @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Contenuto</label>
            <textarea cols="30" rows="10" name="content" class="form-control @error('content') is-invalid @enderror" id="content">
            {{ $project->content }}
            </textarea>
            {{-- errore content --}}
            @error('content')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Crea</button>
    </form>
</div>
</div>

@endsection