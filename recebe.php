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
    $tarefa = $_POST['tarefa'];
    $stmp = $bd->prepare('INSERT INTO tarefas (descricao) VALUES (:tarefa)');
    $stmp -> bindParam (':tarefa', $tarefa);
    if ($stmp->execute() ){
        echo "Tarefa gravada!";
    }else {
        echo "Tarefa não gravada!";
    }
    
    //$repeticao = $repeticao > 1000 ? 1000 : $repeticao;
/*for ($i = 0; $i < $repeticao; $i++){
    echo "$usuario";
    echo "<br>";
    //if($i > 1000) break;
        GERA CSV
    $f = fopen('usuarios.csv', 'a');
    $escreveu = fwrite( $f, "{$usuario};\"{$repeticao}\"\n");
    fclose($f);
    echo "<a href='index.php' class='btn btn-primary'>Voltar</a>
";
}*/
    
    
    ?>
<body>
    
</body>
</html>
