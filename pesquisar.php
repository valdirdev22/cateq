<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "catequese";
    //Criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    $pesquisar = $_POST['pesquisar'];
    $result = "SELECT * FROM cadastro WHERE nome LIKE '%$pesquisar%' LIMIT 5";
    $resultado = mysqli_query($conn, $result);
    
    while($rows_cadastro = mysqli_fetch_array($resultado)){
        echo "Nome a pesquisar: ".$rows_cadastro['nome']."<br>";
    }
?>

 
