@extends('layouts.admin')

@section('title', 'Listagem de tarefas')

@section('content')
    <h1>listagem</h1>
    <a href="{{ route('tarefas.add') }}">Adicionar Nova tarefa</a>
    @if (count($list)>0)
    <ul>
        @foreach ($list as $item)
            <li>
                <a href="{{ route('tarefas.done', ['id'=>$item->id]) }}">[@if ($item->realizado===1) desmarcar @else marcar
                @endif]</a>
                {{$item->titulo}}
                <a href="{{ route('tarefas.edit', ['id'=>$item->id]) }}">[ Editar ]</a>
                <a href="{{ route('tarefas.del', ['id'=>$item->id]) }}" onclick="return confirm('Tem certeza vamos ecluir?')" >  [ Excluir ]</a>
            </li>
        @endforeach
    </ul>
    @else
        <h1>Não há itens a serem listados.</h1>
    @endif

@endsection
