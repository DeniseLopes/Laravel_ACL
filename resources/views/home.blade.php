@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <h2>Lista de Chamados</h2>

    @can('create',App\Chamado::class)
    <p>Criar Chamado</p>
    @endcan

    <!--Veridica se existe um chamado -->
    <!--Can permite que o usuario pode vizualizar somente os chamados relacionado ao id -->
    @forelse($chamados as $key => $value)


    <p>{{$value->titulo}}&nbsp &nbsp

      @can('view',$value)
        @can('update',$value)
          <a href="/home/{{$value->id}}">Editar</a>
        @endcan
        @can('delete',$value)
        <a href="/home/{{$value->id}}">Deletar</a>
        @endcan
      
      @endcan

    </p>


    @empty
    <p>não existem chamados!</p>
    @endforelse

  </div>
</div>
@endsection
