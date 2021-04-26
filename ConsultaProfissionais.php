<?php
include("Conecta.php"); // caminho do seu arquivo de conexão ao banco de dados

$query = "SELECT * FROM profissionais";
$conn = mysqli_query($conn,$query);

$linha = mysqli_fetch_assoc($conn);
// calcula quantos dados retornaram
$total = mysqli_num_rows($conn);
?>


<!DOCTYPE html PUBLIC >
<!DOCTYPE html>
<html>
<head>
	<title>Consulta Profissionais</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/bootstrap.css" >
    <link rel="stylesheet" href="css/ConsultaProfissionais.css" >    
</head>
<body>

	<div class="Menu"> 
<h1><center>Consulta de Profissionais</center></h1>
<div class="btn-group" role="group" aria-label="Basic example">
<a href='SobreNos.html' type="button" class="btn btn-secondary">Quem Somos</a>
<a href='CadastroClientes.html' type="button" class="btn btn-secondary">Cadastro Clientes</a> 
<a href='CadastroProfissional.html' type="button" class="btn btn-secondary">Cadastro Profissional</a> 
</div>
</div>

<div  class="jumbotron text-center">  
<center><?php
    // se o número de resultados for maior que zero, mostra os dados
    if($total > 0) {
        // inicia o loop que vai mostrar todos os dados
        do {
?>
            <table border='1' class='txt-puro'>


            <tr>
                <td>  <b>Nome</b> </td>
                 <td>    <b>E-Email </b></td>
                  <td>    <b>Sexo</b></td>
                <td>   <b>DDD </b></td>
                <td>    <b>Telefone</b></td>
                <td>    <b>Endereço</b></td>
                <td>    <b>Bairro</b></td>
                <td>    <b>Estado</b></td>
                <td>    <b>Cidade</b></td>
                <td>    <b>CEP</b></td>
                <td>    <b>País</b></td>
                <td>    <b>Ramo</b></td>
                <td>    <b>Descrição</b></td>
                <td>    <b>Notificações</b></td>
                <td>    <b>ID</b></td>
                
            </tr>
                <tr> <td><?=$linha['nome']?></td>
                    <td><?=$linha['email']?></td>
                    <td><?=$linha['sexo']?></td>
                    <td><?=$linha['ddd']?></td>
                    <td><?=$linha['telefone']?></td>
                    <td><?=$linha['endereço']?></td>
                    <td><?=$linha['bairro']?></td>
                    <td><?=$linha['estado']?></td>
                    <td><?=$linha['cidade']?></td>
                    <td><?=$linha['cep']?></td>
                    <td><?=$linha['país']?></td>
                    <td><?=$linha['ramo']?></td>
                    <td><?=$linha['descricao']?></td>
                    <td><?=$linha['news']?></td>
                    <td><?=$linha['id']?></td>
            </tr>
            <br>
            <?php
        // finaliza o loop que vai mostrar os dados
        }while($linha = mysqli_fetch_assoc($conn));
    // fim do if 
    }
?>

</table> 
</center>
</div>

</td>
<td></td>
</tr>
</div>

</body>
</html>