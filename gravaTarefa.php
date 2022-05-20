<?php
require 'controleDeAcesso.php';

require 'conexao.php'; //busca o código para eu não ter que repetir

$tarefa = $_POST['tarefa'];//isso foi digitado pelo usuário. o dado ainda é inseguro

$arquivoEnviado = '';

if($_FILES['figuras']['error'] == 0 && 

    $_FILES['figuras']['size'] > 0){

    $mimeType = mine_content_type($_FILES['figura']['tmp_name']);

    $campos = explode('/', $mineType);

    $tipo = $campos[0];

    $ext = $campo [1];

        if($tipo == 'image'){

    $arquivoEnviado = 'imagens/' . $_FILES['figura']['name'] . '_' . md5(rand(-9999999, 9999999) . microtime()) . '.' . $ext;

    move_uploaded_file($_FILES['figura']['tmp_name'], "$arquivoEnviado");

 }else{

    echo "Só é possível enviar tipo de arquivo de imagens";

    }

}


$stmt = $bd->prepare('INSERT INTO tarefas (descricao, imagem) VALUES (:tarefas, :imagem)');//statement prepara a consulta

$stmt->bindParam(':tarefas' , $tarefa);//se uma coisa potencialmente perigosa for digitada pelo usuário, ele será analisado mas não danificará o banco. fica gravado como dado apenas
$stmt->bindParam(':tarefas' , $arquivoEnviado);

//isso insere na tabela de tarefas e se der certo, avisa o usuário e senão, avisa também
if( $bd->exec("INSERT INTO tarefas (descricao) VALUES ('$texto')")){

    echo "$texto gravado"; 
} else {
    echo "nada foi gravado.";
}

echo "<a href='formulario.php'>Voltar</a>";
echo "<a href='listar.php'>Lista de tarefas</a>";

