@extends('layouts.app')

@section('content')

<div class="container py-4">
    <div class="row justify-content-between">
        <div class="col-auto">
            <h1>Crea nuovi Progetti</h1>

        </div>
        <div class="col-auto">
            <a class="btn btn-danger" href="{{ route('projects.index') }}">home</a>
        </div>

    </div>
</div>

<div class="container">
    <form action="{{ route('projects.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" id="title">
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
            {{ old('content') }}
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

@endsection