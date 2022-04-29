<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lendo Arquivo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        require 'conexao.php';
        include 'header.php';
        $stmt = $bd->query('SELECT id_descricao, descricao FROM tarefas');
        $stmt->execute();
        echo "
        <form  method='POST'>
            <table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>Tarefa</th>
                    </tr>
                </thead>
        ";
        while($reg = $stmt->fetch(PDO::FETCH_ASSOC)){
            echo "
                <tbody>
                    <td >{$reg['id_descricao']}</th>
                    <td>{$reg['descricao']}</td>
                    <td class = 'col-1'>
                        <button formaction = 'edita.php' name = 'id_descricao' value = '{$reg['id_descricao']}'>Editar </button> 
                    <td>
                    <td class = 'col-1'>
                        <button formaction = 'apaga.php' name = 'id_descricao' value = '{$reg['id_descricao']}'>Excluir </button> 
                    <td>
                ";
        }
        echo "
                </tbody>
            </table>
        <form>
        "
    ?>
</body>
</html>
