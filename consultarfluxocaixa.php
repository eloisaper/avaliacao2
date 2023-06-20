<?php 
     include('conexao.php');
     $tipo = $_POST['tipo'];
    
     if($tipo == 'entrada'){
        $sql = "SELECT SUM(valor) valor FROM fluxo_caixa where $tipo == 'entrada'";
        echo "A soma das entradas é: $sql";
     }

     else if ($tipo == 'saida') {
        $sql = "SELECT SUM(valor) valor FROM fluxo_caixa where $tipo == 'saida'";
        echo "A soma das saidas é: $sql";
    } 
        else {
            $sql = "SELECT SUM(case when tipo = 'entrada' then valor else 0 end) - sum(case when tipo = 'saida' then valor else 0 end ) as valor FROM fluxo_caixa";
            echo "O saldo total é: $sql";
        }
 
     echo "<h4><a href='index.html'>voltar</a></h4>";
?>