<?php
include('conexao.php');
$id = $_GET['id'];
$sql = "SELECT * FROM fluxo_caixa WHERE id = $id";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Alterar Fluxo de Caixa</h1>
    <form action="alterarfluxocaixa_exe.php" method="post">  
          <fieldset>
        <div>
        <input name="id" type="hidden" value="<?php echo $row ['id']?>">
        </div>
        <div>
            <label for="data">Data: </label>
            <input type="text" name="data" id="data" placeholder="Digite a data" required
            value="<?php echo $row ['data']?>">
        </div>
        <div>
            <label for="tipo">Tipo de Transação</label><br>
            <input type="radio" name="tipo" id="tipo" value="entrada"/>Entrada<br/>
            <input type="radio" name="tipo" id="tipo" value="saida"/>Saida<br/>
        </div>
        <div>
            <label for="valor">Valor: </label>
            <input type="valor" name="valor" id="valor" placeholder="Digite o valor" 
                value="<?php echo $row ['valor']?>">
        </div>
        <div>
            <label for="historico">Historico: </label>
            <input type="historico" name="historico" id="historico" placeholder="Digite o historico" 
                value="<?php echo $row ['valor']?>">
        </div>
        <div>
            <label for="cheque">Cheque: </label>
            <select name="cheque">
                <option value="sim">sim</option>
                <option value="nao">Nao</option>
            </select>
        </div>
    <input type="submit" value="Salvar">
</fieldset>

    </form>
    
</body>
</html>