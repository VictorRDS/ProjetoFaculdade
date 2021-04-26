
<?php

include_once("Conecta.php");	

$nome	= $_POST ["nome"];	//atribuição do campo "nome" vindo do formulário para variavel	
$email	= $_POST ["email"];	//atribuição do campo "email" vindo do formulário para variavel
$sexo	= $_POST ["sexo"];	//atribuição do campo "sexo" vindo do formulário para variavel
$ddd	= $_POST ["ddd"];	//atribuição do campo "ddd" vindo do formulário para variavel
$tel	= $_POST ["telefone"];	//atribuição do campo "telefone" vindo do formulário para variavel
$endereco	= $_POST ["endereco"];	//atribuição do campo "endereco" vindo do formulário para variavel
$cidade	= $_POST ["cidade"];	//atribuição do campo "cidade" vindo do formulário para variavel
$estado	= $_POST ["estado"];	//atribuição do campo "estado" vindo do formulário para variavel
$bairro = $_POST ["bairro"];	//atribuição do campo "bairro" vindo do formulário para variavel
$cep	= $_POST ["cep"];	//atribuição do campo "cep" vindo do formulário para variavel
$pais	= $_POST ["pais"];	//atribuição do campo "pais" vindo do formulário para variavel
$ramo	= $_POST ["ramo"];	//atribuição do campo "ramo" vindo do formulário para variavel
$descricao = $_POST["descricao"];	//atribuição do campo "descricao" vindo do formulário para variavel
$news	= $_POST ["news"];	//atribuição do campo "news" vindo do formulário para variavel

//Gravando no banco de dados !

$result_usuario = "INSERT INTO profissionais ( `nome` , `email` , `sexo` , `ddd` , `telefone` , `endereço` , `cidade` , `estado` , `bairro` , `cep` , `país` , `ramo`, `descricao` , `news` , `id` ) 
VALUES ('$nome', '$email', '$sexo', '$ddd', '$tel', '$endereco', '$cidade', '$estado', '$bairro','$cep', '$pais','$ramo', '$descricao', '$news', '')";
$resultado_usuario =  mysqli_query($conn, $result_usuario);	
?>

<!DOCTYPE html PUBLIC >
<html>
<head>
	<title>Insere Profissional</title>
	<link rel="stylesheet" href="css/bootstrap.css" >
	<link rel="stylesheet" href="css/InsertProfissionais.css" >
	<meta http-equiv="refresh" content="8;url=EsperaProfissionais.html">	
	<meta charset="UTF-8"></head>
</head>


<body>

<div class="Menu"> 
	<h1><center>
	<?php echo "Cadastro realizado com sucesso! "; ?></center></h1>
	<div class="btn-group" role="group" aria-label="Basic example">
	<a href='SobreNos.html' type="button" class="btn btn-secondary">Quem Somos</a>
	<a href='CadastroClientes.html' type="button" class="btn btn-secondary">Cadastro Clientes</a> 
	<a href='CadastroProfissional.html' type="button" class="btn btn-secondary">Cadastro Profissional</a> 
</div>
</div>


<div class="jumbotron text-center">
	<center><div class='txt-puro'>
	<i>	Você está acessando o site LMV Solutions. </i>
</div>


</body>
</html>