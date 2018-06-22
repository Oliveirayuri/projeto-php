<?php
	$titulo = "titulo da página";
	$tituloConteudo = "<h1> Titulo do Texto</h1>";
	$conteudo = "<p>GIT - versionamento</p>";
?>
<html>
	<head>
		<title><?php echo $titulo; ?></title>
		<meta charset="utf-8"/> 
	</head>
	<body> 
	<?php
		echo $tituloConteudo;
		echo $conteudo;
	?>
	</body>
</html>