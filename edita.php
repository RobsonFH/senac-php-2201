<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <?php
    include ('header.php')
    ?>
</body>
</html>
<?php
require_once 'conexao.php';
$id_descricao = preg_replace('/\D/', '', $_POST['id_descricao']);
var_dump($_POST);
if(isset($_POST['tarefa'])){
    $stmt = $bd->prepare('UPDATE tarefas SET descricao = :descricao WHERE id_descricao = :id_descricao');
    $stmt->bindParam(':descricao',$_POST['tarefa']);
    $stmt->bindParam(':id_descricao', $id_descricao);
        
        
    if($stmt->execute()){
        echo "Tarefa atualizada";
    }
    else {
        echo "Erro ao atualizar tarefa";
    }
}
$stmt = $bd->query("SELECT descricao FROM tarefas WHERE id_descricao = $id_descricao");
$stmt->execute();
$tarefa = $stmt->fetch(PDO::FETCH_ASSOC);
echo "
    <form method='post'>
        <label  class='form-label' for = 'tarefa'>Tarefa</label>
        <input type='text' class='form-control' id = 'tarefa' name ='tarefa' value = '{$tarefa['descricao']}'>
        <input type = 'hidden' id = 'id_descricao' name = 'id_descricao' value = '{$id_descricao}'>
        <input type = 'submit' value = 'Atualizar' class = 'btn btn-primary'>
    </form>
";
