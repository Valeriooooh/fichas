<?php if ($ses !=1) {
	header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <title>Projeto Final</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item">
			<div class="dropdown">
  			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    		Fornecedores
  			</button>
  			<div class="dropdown-menu">
    			<a class="dropdown-item" href="#">Listar Fornecedores</a>
    			<a class="dropdown-item" href="Inserir/InsFornecedores.php">Inserir Fornecedores</a>
    			<a class="dropdown-item" href="#">Remover Fornecedores</a>
  			</div>
			</div>

    </li>
    <li class="nav-item">
			<div class="dropdown">
  			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    		ForneceArtigos
  			</button>
  			<div class="dropdown-menu">
    			<a class="dropdown-item" href="#">Listar Tabela</a>
    			<a class="dropdown-item" href="#">Inserir</a>
    			<a class="dropdown-item" href="#">Remover</a>
  			</div>
			</div>
    </li>
    <li class="nav-item">
			<div class="dropdown">
  			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    		Artigos
  			</button>
  			<div class="dropdown-menu">
    			<a class="dropdown-item" href="#">Listar Artigos</a>
    			<a class="dropdown-item" href="#">Inserir Artigos</a>
    			<a class="dropdown-item" href="#">Remover Artigos</a>
  			</div>
			</div>
    </li>
		<li class="nav-item">
			<div class="dropdown">
  			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    		Compras
  			</button>
  			<div class="dropdown-menu">
    			<a class="dropdown-item" href="#">Listar Compras</a>
    			<a class="dropdown-item" href="#">Inserir Compras</a>
    			<a class="dropdown-item" href="#">Remover Compras</a>
  			</div>
			</div>

    </li>
		<li class="nav-item">
			<div class="dropdown">
  			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    		Clientes
  			</button>
  			<div class="dropdown-menu">
    			<a class="dropdown-item" href="#">Listar Clientes</a>
    			<a class="dropdown-item" href="#">Inserir Clientes</a>
    			<a class="dropdown-item" href="#">Remover Clientes</a>
  			</div>
			</div>

    </li>
		<li class="nav-item">
			<div class="dropdown">
  			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    		Vendas
  			</button>
  			<div class="dropdown-menu">
    			<a class="dropdown-item" href="#">Listar Vendas</a>
    			<a class="dropdown-item" href="#">Inserir Vendas</a>
    			<a class="dropdown-item" href="#">Remover Vendas</a>
  			</div>
			</div>

    </li>
		<li class="nav-item">
			<div class="dropdown">
  			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    		DetalhesVendas
  			</button>
  			<div class="dropdown-menu">
    			<a class="dropdown-item" href="#">Listar Tabela</a>
    			<a class="dropdown-item" href="#">Inserir</a>
    			<a class="dropdown-item" href="#">Remover</a>
  			</div>
			</div>

    </li>
  </ul>
	<a href="logout.php"><button class="btn btn-secondary my-2 my-sm-0">LogOut</button></a>
</nav>
<br>

<div class="container-fluid">
  <h3>Página Inicial</h3>
  <p>Dirija-se ao menu para visualizar as tabelas e fazer as aleterações necessárias.</p>
  <p>.</p>
</div>

</body>

</html>