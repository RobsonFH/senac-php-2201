<?php
require 'conexao.php';
include 'header.php';
$stmt = $bd->query('SELECT id, nome FROM usuarios');
$stmt->execute();
echo "
<form  method='POST'>
    <table class='table'>
        <thead>
            <tr>
                <th scope='col'>Email</th>
                <th scope='col'>Nome</th>
            </tr>
        </thead>
";
while($reg = $stmt->fetch(PDO::FETCH_ASSOC)){
    echo "
        <tbody>
            <td >{$reg['id']}</th>
            <td>{$reg['nome']}</td>
            <td class = 'col-1'>
                <button formaction = 'editar_usuario.php' name = 'id' value = '{$reg['id']}'>Editar </button> 
            <td>
            <td class = 'col-1'>
                <button formaction = 'apagar_usuario.php' name = 'id' value = '{$reg['id']}'>Excluir </button> 
            <td>
        ";
}
echo "
        </tbody>
    </table>
<form>
"
?>
</body>
</html>
