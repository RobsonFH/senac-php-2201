<?php
require_once 'conexao.php';

$stmt = $bd->query('SELECT id, descricao FROM tarefas');//preparou a consulta

$stmt->execute();//executou





echo "<form method='post'>
<table border = '1'> 
            <tr> 
                <td>ID</td><td>Tarefa</td><td>&nbsp;</td>
             </tr>";


//recupera primeiro registro, se colocar de novo, sempre vai resgatar a primeira inserção
/*colocou a repetição da exibição dos registros*/
while($registro = $stmt ->fetch(PDO::FETCH_ASSOC)){


echo " <tr>
        <td>{$registro['id']}</td>
        <td>{$registro['descricao']}</td>
        <td><button name='id' formaction='editarTarefa.php'
             value='{$registro['id']}'>Editar</button></td>
        <td><button name='id' formaction='apagarTarefa.php' 
            value='{$registro['id']}'>Apagar</button></td>
  
  
  
        </tr>";
}


echo "</table></form><br><a href='formulario.php'>voltar</a>";