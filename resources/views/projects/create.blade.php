@extends('layouts.app')

@section('content')

<div class="container">

    <h1>Crea un nuovo progetto</h1>
</div>

<div class="container">
    <form action="{{ route('projects.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" id="title" aria-describedby="titleHelp">
            {{-- errore title --}}
            @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Contenuto</label>
            <textarea name="content" class="form-control @error('content') is-invalid @enderror" id="content">

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