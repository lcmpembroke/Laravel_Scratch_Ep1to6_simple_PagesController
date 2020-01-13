@extends('layout')

@section('content')
    <h1>Welcome page....using template, extends and sections...</h1>
    <p>{{ $foo }}</p>

    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach
    </ul>

@endsection