<?php
require 'conexao.php'; //busca o código para eu não ter que repetir

$texto = $_POST['tarefa'];//isso foi digitado pelo usuário. o dado ainda é inseguro

$stmt = $bd->prepare('INSERT INTO tarefas (descricao) VALUES (:tarefas)');//statement prepara a consulta

$stmt->bindParam(':tarefas' , $texto);//se uma coisa potencialmente perigosa for digitada pelo usuário, ele será analisado mas não danificará o banco. fica gravado como dado apenas

//isso insere na tabela de tarefas e se der certo, avisa o usuário e senão, avisa também
if( $bd->exec("INSERT INTO tarefas (descricao) VALUES ('$texto')")){

    echo "$texto gravado"; 
} else {
    echo "nada foi gravado.";
}

echo "<a href='formulario.php'>Voltar</a>";
echo "<a href='listar.php'>Lista de tarefas</a>";

