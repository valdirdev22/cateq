
<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$turma = $_POST['turma'];
$comunidade = $_POST['comunidade'];
$dia = $_POST['dia'];
$batizado = $_POST['batizado'];
if (!$strcon) {
 die('Não foi possível conectar ao Banco de Dados');
}
$sql = "INSERT INTO cadastro VALUES ";
$sql .= "('$nome', '$email', '$turma', '$comunidade', '$dia', '$batizado')"; 
mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "Cliente cadastrado com sucesso!<br>";
?>


