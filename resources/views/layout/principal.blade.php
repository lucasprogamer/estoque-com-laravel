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
	    <!-- Versão mobile-->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">Estoque Laravel</a>
	    </div>

	    <!-- Links para menu -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

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
								<li><a href="/auth/logout">Perfil</a></li>
								<li><a href="/auth/logout">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

		
		@yield('conteudo')

		<footer class="footer">
			<p>&copy Livro de Laravel da Casa do Código.</p>
		</footer>
	<!-- jQuery (Nescessario no bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Inclui todos os plugins nescessarios -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		
</div>
</body>
</html>