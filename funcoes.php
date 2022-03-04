<?php

//function cadastraAluno(string $nome, int $matricula = 0):bool parâmetro não obrigatório

 /*   
function cadastraAluno(array $nome):bool{
    echo "Aluno {$nome ['nome']} cadastrado";
        return true;
}
$aluno = ['nome' => 'Robson', 'Matricula' => '12345'];
if (cadastraAluno($aluno))
    echo "<br>Minha função funcionou!";
else{
    echo "<br>Minha função função não funcionou!";
}
*/

$aluno = ['nome' => 'Robson', 'Matricula' => '12345'];

function cadastraAluno(array $aluno):bool
{

        $f = fopen('alunos.csv', 'a');
        $escreveu = fwrite( $f, "{$aluno['matricula']};\"{$aluno['nome']}\"\n");
        fclose($f);

        if($escreveu){
            return true;
        }else{

        
        return false;
    }
}

$funcionou = cadastraAluno(['matricula' => 12345, 'nome' => 'Isonequex']);

if ($funcionou){

    echo "<br>Aluno cadastrado com sucesso!";
}else{

    echo "<br>Erro ao cadastrar o aluno!";
}



$var = 10;

function soma($valor){

    return $valor + 10;
}

echo "<br>Variavel antes: $var";

soma($var);

echo "<br>Variavel depois: $var";