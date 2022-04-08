<?php

require_once 'conexao.php';

$id = preg_replace('/\D/', '', $_POST['id']);



//atualizar registro
if(isset($_POST['tarefas'])){


$stmt = $bd->prepare('UPDATE tarefas SET descricao = :descricao WHERE id = :id');
$stmt-> bindParam(':descricao', $_POST['tarefa']);
$stmt-> bindParam(':id', $id);


if($stmt-> execute()){

    echo "tarefa atualizada";
}else{

    echo "erro ao atualizar";
    
    }
}
//fim att registro

$stmt = $bd->query("SELECT descricao FROM tarefas WHERE id = $id");
$stmt->execute();
$tarefa = $stmt->fetch(PDO::FETCH_ASSOC);

echo " <form method='post'>
            <label for='tarefa'>tarefa</label>
            <input type='text' id='tarefa'name='tarefa'
                value='{$tarefa['descricao']}'>
                <br><br>
                <input type='hidden' name='id' value='$id'>
            <input type='submit' value='Atualizar'>
        </form>";