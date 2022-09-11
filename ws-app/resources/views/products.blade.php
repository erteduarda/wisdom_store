@extends('layouts.main')

@section('title', 'Produtos')

@section('content')
    <h1>PRIMEIRO PROJETO LARAVEL<h1>
    <br>
    <p>{{ $nome }}</p>
    @if ($idade < 30)
        <p>Jovem</p>
    @endif
    @for($i = 0; $i < count($arr); $i++)
        <p>{{ $arr[$i] }}</p>
    @endfor

    <h2>{{ $id }}</h2>
@endsection