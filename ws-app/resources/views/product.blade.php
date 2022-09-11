@extends('layouts.main')

@section('title', 'Produto')

@section('content')
    <h1>PRODUTO<h1>
    <br>
    <p>O cliente esta buscando por: {{ $busca }}</p>
@endsection