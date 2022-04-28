<?php

require_once 'conexao.php';

$stmt = $bd->query('SELECT id, nome FROM usuarios');//preparou a consulta

$stmt->execute();//executou





echo "<a href='formTarefa.php'>+ Novo Usuario </a><br>

<form method='post'>
<table border = '1'> 
            <tr> 
                <td>E-mail</td><td>nome</td><td>&nbsp;</td>
             </tr>";


//recupera primeiro registro, se colocar de novo, sempre vai resgatar a primeira inserção
/*colocou a repetição da exibição dos registros*/
while($registro = $stmt ->fetch(PDO::FETCH_ASSOC)){


echo " <tr>
        <td>{$registro['id']}</td>
        <td>{$registro['nome']}</td>
        <td><button name='id' formaction='editarUsuario.php'
             value='{$registro['id']}'>Editar</button></td>
        <td><button name='id' formaction='apagarUsuario.php' 
            value='{$registro['id']}'>Apagar</button></td>
  
  
  
        </tr>";
}


echo "</table></form><br><a href='formUsuario.php'>voltar</a>";