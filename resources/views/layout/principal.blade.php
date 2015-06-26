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
					<li><a href="{{action('ProdutoController@lista')}}">Listagem</a></li>
					<li><a href="{{action('ProdutoController@novo')}}">Novo</a></li>
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