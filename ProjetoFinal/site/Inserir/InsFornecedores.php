<?php
session_start();
//error_reporting(0);
if ($_SESSION['ligado'] != 1) {
	header("location: /fichas/ProjetoFinal/site/login.php");
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
			<a href="/fichas/ProjetoFinal/site/index.php"> <button type="button" class="btn btn-outline-secondary">
			Inicio
			</button></a>
	    <li class="nav-item">
				<div class="dropdown">
	  			<button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown">
	    		Fornecedores
	  			</button>
	  			<div class="dropdown-menu">
	    			<a class="dropdown-item" href="/fichas/ProjetoFinal/site/Listar/LisFornecedores.php">Listar Fornecedores</a>
	    			<a class="dropdown-item" href="/fichas/ProjetoFinal/site/Inserir/InsFornecedores.php">Inserir Fornecedores</a>
	    			<a class="dropdown-item" href="/fichas/ProjetoFinal/site/Remover/RemFornecedores.php">Remover Fornecedores</a>
	  			</div>
				</div>

	    </li>
	    <li class="nav-item">
				<div class="dropdown">
	  			<button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown">
	    		ForneceArtigos
	  			</button>
	  			<div class="dropdown-menu">
	    			<a class="dropdown-item" href="/fichas/ProjetoFinal/site/Listar/LisForneceArtigos.php">Listar Tabela</a>
	    			<a class="dropdown-item" href="/fichas/ProjetoFinal/site/Inserir/InsForneceArtigos.php">Inserir</a>
	    			<a class="dropdown-item" href="/fichas/ProjetoFinal/site/Remover/RemForneceartigos.php">Remover</a>
	  			</div>
				</div>
	    </li>
	    <li class="nav-item">
				<div class="dropdown">
	  			<button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown">
	    		Artigos
	  			</button>
	  			<div class="dropdown-menu">
	    			<a class="dropdown-item" href="/fichas/ProjetoFinal/site/Listar/LisArtigos.php">Listar Artigos</a>
	    			<a class="dropdown-item" href="/fichas/ProjetoFinal/site/Inserir/InsArtigos.php">Inserir Artigos</a>
	    			<a class="dropdown-item" href="/fichas/ProjetoFinal/site/Remover/RemArtigos.php">Remover Artigos</a>
	  			</div>
				</div>
	    </li>
			<li class="nav-item">
				<div class="dropdown">
	  			<button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown">
	    		Compras
	  			</button>
	  			<div class="dropdown-menu">
	    			<a class="dropdown-item" href="/fichas/ProjetoFinal/site/Listar/LisCompras.php">Listar Compras</a>
	    			<a class="dropdown-item" href="/fichas/ProjetoFinal/site/Inserir/InsCompras.php">Inserir Compras</a>
	    			<a class="dropdown-item" href="/fichas/ProjetoFinal/site/Remover/RemCompras.php">Remover Compras</a>
	  			</div>
				</div>

	    </li>
			<li class="nav-item">
				<div class="dropdown">
	  			<button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown">
	    		Clientes
	  			</button>
	  			<div class="dropdown-menu">
	    			<a class="dropdown-item" href="/fichas/ProjetoFinal/site/Listar/LisClientes.php">Listar Clientes</a>
	    			<a class="dropdown-item" href="/fichas/ProjetoFinal/site/Inserir/InsClientes.php">Inserir Clientes</a>
	    			<a class="dropdown-item" href="/fichas/ProjetoFinal/site/Remover/RemClientes.php">Remover Clientes</a>
	  			</div>
				</div>

	    </li>
			<li class="nav-item">
				<div class="dropdown">
	  			<button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown">
	    		Vendas
	  			</button>
	  			<div class="dropdown-menu">
	    			<a class="dropdown-item" href="/fichas/ProjetoFinal/site/Listar/LisVendas.php">Listar Vendas</a>
	    			<a class="dropdown-item" href="/fichas/ProjetoFinal/site/Inserir/InsVendas.php">Inserir Vendas</a>
	    			<a class="dropdown-item" href="/fichas/ProjetoFinal/site/Remover/RemVendas.php">Remover Vendas</a>
	  			</div>
				</div>

	    </li>
			<li class="nav-item">
				<div class="dropdown">
	  			<button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown">
	    		DetalhesVendas
	  			</button>
	  			<div class="dropdown-menu">
	    			<a class="dropdown-item" href="/fichas/ProjetoFinal/site/Listar/LisDetalhesVendas.php">Listar Tabela</a>
	    			<a class="dropdown-item" href="/fichas/ProjetoFinal/site/Inserir/InsDetalhesVendas.php">Inserir</a>
	    			<a class="dropdown-item" href="/fichas/ProjetoFinal/site/Remover/RemDetalhesVendas.php">Remover</a>
	  			</div>
				</div>

	    </li>
	  </ul>
		<?php
		if ($_SESSION['ligado'] == 1) {
			echo '<a href="/fichas/ProjetoFinal/site/logout.php"> <button class="btn btn-outline-danger my-2 my-sm-0"> '.$_SESSION['user'].' LogOut</button></a>';
		} else {
			echo '<a href="/fichas/ProjetoFinal/site/login.php"> <button class="btn btn-outline-info my-2 my-sm-0"> LogIn</button></a>';
		}
	?>

</nav>
<br>

<div class="container-fluid">
  <h3>Inserir Fornecedores</h3>
	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th scope="col">Codigo de Fornecedor</th>
				<th scope="col">Endereço</th>
				<th scope="col">Telefone</th>
			</tr>
		</thead>
			  <tbody>
<?php
$ligacao = mysqli_connect('localhost',$_SESSION['user'], $_SESSION['passwd']);


$listagem = mysqli_query($ligacao, "SELECT * FROM Empresa.Fornecedores");

while ($linha = mysqli_fetch_array($listagem)) {

	echo "<tr>
					<td>".$linha['CodForn']."</td>
					<td>".$linha['Endereco']."</td>
					<td>".$linha['Telefone']."</td>
				</tr>";
}
 ?>
</tr>
</tbody>
</table>
  <p></p>
</div>

</body>

</html>
