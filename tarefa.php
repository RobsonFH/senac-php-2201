<?php

require_once '../conexao.php';



 $metodo = $_SERVER['REQUEST_METHOD'];



//Se o requisitante usar o método GET

if($_SERVER['REQUEST_METHOD'] == 'GET'){



    $strSql = '';



    if(isset($_GET['id'])){



        $id = PREG_REPLACE('/\D/', '', $_GET['id']);

        $strSql = "WHERE id = $id" ;

    }





    $stmt = $bd->query('SELECT id, descricao, imagem, apagado FROM tarefas ' .$strSql);

    $stmt->execute();



    $saida = [];



    while($registro = $stmt->fetch(PDO::FETCH_ASSOC)){



        if($registro['apagado'] == 1){

            

            if(isset($_GET['id'])) exit(204);

            

            continue;

        }



        $saida[] = $registro;

    }



    if(count($saida) <= 0){

        http_response_code(404);

        exit();

    }



    http_response_code(200);  



    exit( echo json_encode($saida) );


}

//FIM Se o requisitante usar o método GET



//Se o requisitante usar o método POST ou PUT

if($metodo == 'POST' || $metodo == 'PUT'){

    $tarefas = json_decode( file_get_contents('php://input') );

    if( json_last_error_msg() != JSON_ERROR_NONE ){

        echo json_encode(['erro' => 'JSON Invalido'])
        exit(http_response_code(400) );

    }

    if( isset($tarefa->descricao) || !isset(tarefa->imagem)){
      
        echo json_encode(['erro' => 'Campos obrigatorios:descricao e imagem'])
        exit(http_response_code(400) );

    }

    $stmt = $bd->prepare('INSERT INTO tarefas (descricao, imagem) VALUES (:descricao, :imagem)');
    $stmt->bindParam(':descricao', $tarefa->descricao);
    $stmt->bindParam(':imagem', $tarefa->imagem);
    $stmt->execute();
    $id = $bd->lastInsertId();

    echo json_encode(['id' => $ide]);

    exit(http_response_code(200) );
}

//se o requisitante usar o metodo delete
if($metodo == 'DELETE'){

    if (!isset($_GET['id']) ){

        echo json_encode(['erro' => 'id não fornecido']);
        exit(http_response_code(400) );

    }

    $id = preg_replace('/\D/', '', $_GET['id']);

    $stmt = $bd->query("UPDATE tarefas SET apagado = 1 WHERE id = $id");
    if($stmt->execute());{

        exit(http_response_code(200) );

    }else{

        exit ( http_response_code(500));  
    }
}
    
//Retorna código de erro método não permitido

http_response_code(405);
