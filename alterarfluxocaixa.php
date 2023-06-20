<?php
include('conexao.php');
$id = $_POST['id'];
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
    <form action="alterarfluxo_exe.php" method="post">  
          <fieldset>
            
        <input name="id" type="hidden" value="<?php echo $row ['id']?>">
        <div>
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome" placeholder="Digite seu nome" required
            value="<?php echo $row ['nome_usuario']?>">
        </div>
        <div>
            <label for="email">Email: </label>
            <input type="email" name="email" id="email" placeholder="Digite seu email" required
            value="<?php echo $row ['email_usuario']?>">

        </div>
        <div>
            <label for="fone">Fone: </label>
            <input type="tel" name="fone" id="fone" placeholder="Digite seu telefone"  pattern="\([0-9]{2}\)([9]{1})?[0-9]{4}-[0-9]{4}"
                value="<?php echo $row ['fone_usuario']?>">
        </div>
        <div>
            <input type="file" name="foto" id="foto" accept="image/*">
        </div>
        <div>
            <label for="senha">Senha: </label>
            <input type="password" name="senha" id="senha" placeholder="Password" required
            value="<?php echo $row ['senha']?>">

        </div>
    <input type="submit" value="Salvar">
</fieldset>

    </form>
    
</body>
</html>