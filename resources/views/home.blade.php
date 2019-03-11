@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h2>Lista de Chamados</h2>

        <!--Veridica se existe um chamado -->
         <!--Can permite que o usuario pode vizualizar somente os chamados relacionado ao id -->
        @forelse($chamados as $key => $value)
       
        	
           <p>{{$value->titulo}}&nbsp &nbsp
            
           	@can('view',$value)
           	<a href="/home/{{$value->id}}">Editar</a>
           	@endcan

           </p>
            

        @empty
            <p>não existem chamados!</p>
        @endforelse

    </div>
</div>
@endsection
