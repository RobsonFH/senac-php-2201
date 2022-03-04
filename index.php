<?php

//Comentário de linha

/*
Comentário de bloco
*/
/*
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
*/

$usuario[0] = ['nome' => 'Luiz', 

                'senha' => '123'];

$usuario[1] = ['nome' => 'Fer', 

                'senha' => '321'];

$usuario[2] = ['nome' => 'Bono', 

                'senha' => '627'];



echo '<table border="1">
        <tr>
            <td> ID </td>
            <td> Nome </td>
            <td> Senha </td>
        </tr>';


foreach ($usuario as $id => $value) {

    echo "<tr>";

        echo "<td>";

            echo "$id";

        echo "</td>";

        echo "<td>";

            echo "{$value['nome']}";

        echo "</td>";

        echo "<td>{$value['senha']}</td>";

    echo "</tr>";

}

echo "</table>";


$dias = [ 'Dom' => ['Domingo', 'Domingo'],
          'Seg' => ['Segunda', 'Segunda-feira'],
          'Ter' => ['Terça', 'Terça-feira'],
          'Qua' => ['Quarta', 'Quarta-feira'],
          'Qui' => ['Quinta', 'Quinta-feria'],
          'Sex' => ['Sexta',  'Sexta-feira'],
          'Sab' => ['Sábado','Sabaddo']];


          foreach ($dias as $abreviacao => $nome) {

    echo "$abreviacao: {$nome[0]}  ou {$nome[1]} <br>";
          }

  
