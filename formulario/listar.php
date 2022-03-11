<?php  

$f = fopen('alunos.csv','r');

echo "<table border='1'>
        <tr>
             <td>Nome</td><td>Repetições</td>
        </tr>";

while ( $linha = fgets($f) ){

    $campos = explode(';', $linha);
    $nome = $campos[0];
    $rep = $campos[1];

    echo "<tr>
             <td>$nome</td><td>$rep</td>
            </tr>";
}

echo "</tabel>";
