<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebe</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</head>
    <?php 
    require 'conexao.php';
    include 'header.php';
    $id = $_POST['email'];
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $confirmacao_senha = $_POST['confirmacao_senha'];
    
    if ($senha != $confirmacao_senha){
        echo "Senha errada";
        echo "<a href='formulario_usuario.php'>Voltar</a>";
        exit();
    }
    $senha = password_hash($senha, PASSWORD_DEFAULT);
    $stmp = $bd->prepare('INSERT INTO usuarios (id, nome, senha) VALUES (:id, :nome, :senha)');
    $stmp -> bindParam (':id', $id);
    $stmp -> bindParam (':nome', $nome);
    $stmp -> bindParam (':senha', $senha);
    
    if ($stmp->execute() ){
        echo "Usuario gravada!";
    
    }else {
        echo "Usuario não gravada!";
    }
    
    echo "<a href='formulario_usuario.php'>Voltar</a>";
    
    ?>
<body>
    
</body>
</html>