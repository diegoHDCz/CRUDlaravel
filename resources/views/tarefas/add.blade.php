@extends('layouts.admin')

@section('title', 'Adição de tarefas')

@section('content')
    <h1>Adição</h1>
    @if ($errors->any())
        <x-package-alert>
            @foreach ($errors->all() as $error)
            {{$error}} <br/>
            @endforeach
        </x-package-alert>
    @endif
    <form action="add" method="post">
        @csrf

        <label>
            Título:<br/>
            <input type="text" name="titulo">
        </label>

        <input type="submit" value="Adicionar" >
    </form>
@endsection
