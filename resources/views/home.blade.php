@extends('layouts.app')

@section('content')
<h1>Dati dal server:</h1>
<div id="moviesContainer">
    @foreach ($movies as $movie => $key)
    <div class="card">
        @foreach ($key as $element)
            <p>{{$element}}</p>
        @endforeach
        {{-- @foreach ($key as $element => $detail)
            <p>{{$loop->iteration}}</p>
            <p>{{$detail}}</p>
        @endforeach --}}
    </div>
    @endforeach
</div>

<button class="btn btn-primary">Cliccami</button>
@endsection
