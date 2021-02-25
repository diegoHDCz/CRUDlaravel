@extends('layouts.admin')

@section('title', 'Listagem de tarefas')

@section('content')
    <h1>listagem</h1>

    @if (count($list)>0)
    <ul>
        @foreach ($list as $item)
            <li>{{$item->titulo}} </li>
        @endforeach
    </ul>
    @else
        <h1>Não há itens a serem listados.</h1>
    @endif

@endsection
