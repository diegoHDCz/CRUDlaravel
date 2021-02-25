@extends('layouts.admin')

@section('title', 'Configurações')
@section('content')

<x-package-alert>
    alguma frase qualquer
</x-package-alert>


<h1>Configurações</h1>
<span>...</span>

meu nome é: {{$nome}} e eu tenho {{$idade}} anos <br>

@if($idade>18)
eu sou maior de idade.
@else
Eu não sou maior de idade
@endif


<form method="POST">
    @csrf
    Nome: <br><br>
    <input type="text" name="name">
    <br>
    <br>
    Idade: <br><br>
    <input type="text" name="idade">
    <br>
    <br>
    estado:
    <br><br>
    <input type="text" name="estado">
    <br>
    <br>

    <input type="submit" value="enviar">
</form>
@endsection
