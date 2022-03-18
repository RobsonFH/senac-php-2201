<?php
//conecta no Banco de Dados
$dsn = 'mysql:dbname=php;host=localhost';
$user = 'root';
$pass = '';


$bd = new PDO($dsn, $user, $pass);
//Fim Conecta no Banco de Dados

//INSERT

$inseriu = $bd-> exec('INSERT INTO tarefas (descricao) VALUES ("Tarefa inserida via php")');


//FIM INSERT

if ($inseriu) {
    
    echo "GRAVOU";

}else{

    echo "ai meu Deus!";

}

$apagou = $bd-> exec(' DELETE FROM tarefas WHERE id =13');

