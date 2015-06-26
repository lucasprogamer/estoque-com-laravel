@extends('layout.principal')

@section('conteudo')
	<div class="panel panel-default">
  		<div class="panel-heading">
    		<h3 class="panel-title">Registro</h3>
  		</div>

  		<div class="panel-body">
    		
    		<form action="auth/register" method="post">
				<input type="hidden" name="_token" value="{{{ csrf_token() }}}">

				<div class="form-group">
					<label>Nome</label>
						<input type="text" name="name" value="" class="form-control" placeholder="Seu Nome">
				</div>
		
				<div class="form-group">
					<label>E-mail</label>
						<input type="text" name="email" value="" class="form-control" placeholder="email@exemplo.com">
				</div>
				<div class="form-group">
					<label>Senha</label>
						<input type="password" name="password" value="" class="form-control" placeholder="Sua Senha">
				</div>
				<div class="form-group">
					<label>Confirme Sua Senha</label>
						<input type="password" name="password_confirmation" value="" class="form-control" placeholder="Confirme Sua Senha">
				</div>
			<button class="btn btn-primary btn-small">Concluir</button>
		</form>

  		</div>
	</div>
		
@stop