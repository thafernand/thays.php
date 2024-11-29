<?php
//Modelo -> Entidade

class Aluno {

//Atributos -> Características
public $nome= 'Thays Fernandes';
public $idade= 16;
public $curso= 'Desenvolvimento de Sistemas';

//Método -> Ações
    function resumirCadFunc(){
    return "$this->nome tem $this->idade anos e faz o curso de $this->curso ";

    }
    function modificarIdade($idade){
    $this->idade = $idade;  
    }

    function modificarCurso($alterarCurso){
        $this->curso= $alterarCurso;
    }


}

//objeto -> Identidade
$y = new Aluno();
echo $y ->resumirCadFunc();
echo '<hr>';
//echo $y -> resumirCadFunc();
//echo '<hr>';

$x = new Aluno();
$x -> modificarCurso('MultiMídia');
echo $x -> resumirCadFunc();
echo '<hr>';


?>
