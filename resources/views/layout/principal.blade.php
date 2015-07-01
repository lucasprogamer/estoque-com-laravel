<html>
<head>
	<link  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="/css/custom.css">
	<title>Controle de Estoque</title>
</head>
<body>
<div class="container">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
			<a href="/home" class="navbar-brand">
				Estoque Laravel
			</a>
			</div>
				<ul class="nav navbar-nav navbar-right">
				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="/login">Login</a></li>
						<li><a href="/registro">Registro</a></li>
					@else
						<li><a href="{{action('ProdutoController@lista')}}">Listagem</a></li>
						<li><a href="{{action('ProdutoController@novo')}}">Novo</a></li>
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} 
								<span class="caret"> </span>
							</a>

							<ul class="dropdown-menu" role="menu">
								<li>
								<a href="/auth/logout">Logout</a>
								</li>
							</ul>
						</li>
					@endif
				</ul>
		</div>
	</nav>


		
		@yield('conteudo')

		<footer class="footer">
			<p>&copy Livro de Laravel da Casa do Código.</p>
		</footer>
		
</div>
</body>
</html>