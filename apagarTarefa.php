<?php
require_once 'conexao.php';

$id = preg_replace('/\D/', '', $_POST['id']);//elimina tudo que não é número

if($bd->exec("DELETE FROM tarefas WHERE id = $id")){

echo "Tarefa apagaa com sucesso!";


}else{


    echo "Erro ao tentar apagar a tarefa!";

}

echo "<br><br> <a href='listarTarefa.php'>voltar</a>";