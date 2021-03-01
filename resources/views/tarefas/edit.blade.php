@extends('layouts.admin')

@section('title', 'Edição de tarefas')

@section('content')
    <h1>Edição de tarefas</h1>
    @if ($errors->any())

       <x-package-alert>
           @foreach ($errors->all() as $error)
               {{$error}}<br/>
           @endforeach
       </x-package-alert>
    @endif

    <form method="post">
        @csrf

        <label>
            Título:<br/>
            <input type="text" name="titulo" value="{{$data->titulo}}">
        </label>

        <input type="submit" value="Salvar" >
    </form>
@endsection
