@extends('layout.principal')

@section('conteudo')
<h1>Formulario de Produto</h1>
	
	@if(count($errors)>0)
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach

		</ul>
	</div>
	@endif

	@if(isset($p->id))
		<form action="/produtos/alterar/{{$p->id}}" method="post">
	@else
		<form action="/produtos/adiciona" method="post">
		
	@endif
			<input type="hidden" name="_token" value="{{{ csrf_token() }}}">
		
			<div class="form-group">
				<label>Nome</label>
				<input type="text" name="nome" value="{{{isset($p->nome) ? $p->nome : old('nome')}}}" class="form-control">
			</div>
			<div class="form-group">
				<label>Descrição</label>
				<input type="text" name="descricao" value="{{{isset($p->descricao) ? $p->descricao : old('descricao')}}}" class="form-control">
			</div>
			<div>
				<label>Valor</label>
			<input type="text" name="valor"  value="{{{isset($p->valor) ? $p->valor : old('valor')}}}"class="form-control">
			</div>
			<div>
				<label>Quantidade</label>
				<input type="number" name="quantidade" value="{{{isset($p->quantidade) ? $p->quantidade : old('quantidade')}}}" class="form-control">
			</div>
			<br></br>
			<button class="btn btn-primary btn-block">Concluir</button>
	 	
		</form>
@stop