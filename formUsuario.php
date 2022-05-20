<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<?php 
    include('header.php');
    include('conexao.php');
    if(isset($_POST['tarefa'])){
        $sql = $bd->prepare("INSERT INTO tarefas (descricao) VALUES (null,?)");
        $sql->execute($_POST['tarefa']);
        
        echo "Inserido com sucesso!";
    }
?>
    <form action="recebe_usuario.php" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Usuario</label>
            
            <div id="email" class="form-text">Escreva o email</div>
            <input type="email" class="form-control" name="email">
            <div id="nome" class="form-text">Escreva o nome</div>
            <input type="text" class="form-control" name="nome">
            <div id="senha" class="form-text">Escreva a senha</div>
            <input type="password" class="form-control" name="senha">
            <div id="confirmacao_senha" class="form-text">Confirme a senha</div>
            <input type="password" class="form-control" name="confirmacao_senha">
            
        </div>
        <button type="submit" value="enviar" class="btn btn-primary">Enviar</button>
        <a href='index.php' class="btn btn-primary">Voltar</a>
    </form>
</body>
</html>