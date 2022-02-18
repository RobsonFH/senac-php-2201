<?php

//Comentário de linha

/*
Comentário de bloco
*/

define("XPTO", "Valor sempre igual");

echo XPTO;

$num = 2;

$var ='<br>' . "Olá mundo! $num";   //o ponto é o operador de concatenação :)

echo $var;

var_dump($var);

//var_dump($var);

//phpinfo(); Informações importantes, como variáveis de ambiente



$contatos = [  "Camis" =>"camila", 
                "boi"  => "Galdino", 
                "gado" => "meistre"];
             
echo "<pre>";

var_dump($contatos);
echo "<br>minha namorada " . $contatos["Camis"]; // Exemplo sem interpolação

echo "<br>meu amigo {$contatos["boi"]}"; // Exemplo com iterpolação



$Usuario[0] = [ "nome" => "Luiz",
                "senha" => "123"];
            
$Usuario[1] = ["nome" => "fer",
               "senha" => "321"];

$Usuario[2] = ["nome" => "bono",
               "senha" => "627"];
               
echo "<prev>\n\n";

var_dump($Usuario);

      


