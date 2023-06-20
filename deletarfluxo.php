<?php
    include('conexao.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM fluxo_caixa where id=$id";
    $result = mysqli_query($con,$sql);
    if($result)
        echo "Dados excluidos com sucesso!<br>";
    else
        echo "Erro ao excluir dados: ". mysqli_error($con)."!";

    echo "<h4><a href='index.html'>voltar</a></h4>";
?>