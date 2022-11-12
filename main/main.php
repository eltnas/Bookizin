<?php
	require_once "./Class/logar.php";

?>

	<form action="cadastroLivro.php" method="post">
		<h1>Cadastro de Livros</h1>
		<label for="txtTitulo">Titulo do Livro:</label>
		<input type="text" name="txtTitulo"/>
		<label for="txtAutor">Autor do Livro:</label>
		<input type="text" name="txtAutor"/>
		<label for="txtISBN">ISBN:</label>
		<input type="text" name="txtISBN"/>
		<label for="txtCod">Codigo de Barras:</label>
		<input type="text" name="txtCod"/>
		<input type="submit" name="cadLivro" value="Cadastrar" />
	</form>

<a href="./Class/logout.php">Sair</a>