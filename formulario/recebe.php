<?php

$usuario = $_POST['usuario'];
$numero = $_POST['numero'];


echo "$usuario, Seja bem vindo(a)";



for($i = 0; $i < $numero && $numero < 50; $i++){

echo "$usuario<br>";


}


$f = fopen('alunos.csv', 'a');

fwrite($f, "$usuario; $numero\r\n");
  
fclose($f);

