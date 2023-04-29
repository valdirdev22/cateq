<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$turma = $_POST['turma'];
$comunidade = $_POST['comunidade'];
$dia = $_POST['dia'];
$batizado = $_POST['batizado'];
$strcon = mysqli_connect('localhost', 'root', '', 'catequese') or die('Erro ao conectar ao banco de dados');
$sql = "INSERT INTO cadastro VALUES ";
$sql .= "('$nome', '$email', '$turma', '$comunidade', '$dia', '$batizado')";
mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "cadastrado concluído com sucesso!";

?>

