<?php
$dsn = 'mysql:dbname=pdo;localhost';
$user = 'root';
$pass = '';
$bd = new PDO($dsn, $user, $pass);
/*$deletar = $bd->exec('DELETE FROM tarefas WHERE id_descricao = 2');
if($deletar){
    echo "APAGAR";
}else {
    echo "<br>NÃO APAGAR";
}
*/