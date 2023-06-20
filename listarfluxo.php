<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include('conexao.php');
        $sql = "SELECT * FROM fluxo_caixa";
        //mysqi_query => executa um comando no banco de dados
        $result = mysqli_query($con,$sql);
        // mysqli_fetch_array retorna apenas uma linha dos registros retornados
        $row = mysqli_fetch_array($result);
    ?>

    <h1>Listar Fluxos</h1>
    <table width="500" align="center" border="1">
        <tr> 
            <th>id</th>
            <th>data</th>
            <th>tipo</th>
            <th>historico</th>
            <th>Cheque</th>
            <th>Deletar</th>
        </tr>
        <?php
            do{
                echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['data']."</td>";
                    echo "<td>".$row['tipo']."</td>";
                    echo "<td>".$row['historico']."</td>";
                    echo "<td>".$row['cheque']."</td>";
                    echo "<td><a href='deletarfluxo.php?id=".$row['id']."'>deletar</a></td>";
                echo "</tr>";
            } while($row = mysqli_fetch_array($result));
            echo "<tr>";
                    echo "<td><a href='index.html>voltar</a></td>";
            echo "</tr>";
        ?>
    </table>
</body>
</html>