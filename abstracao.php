<?php
//Modelo -> Entidade

class Funcionario {

//Atributos -> Características
public $nome= 'José';
public $telefone= null;
public $numFilhos= 2;

//Método -> Ações
    function resumirCadFunc(){
    return "$this->nome possui $this->numFilhos filho(s)";

    }
    function modificarNumFilhos($Filhos){
    $this->nome = $Filhos;  
    }

    function modificarNome($alterarNome){
        $this->nome= $alterarNome;
    }


}

//objeto -> Identidade
$y = new Funcionario();
echo $y ->resumirCadFunc();
echo '<hr>';
$y->modificarnumFilhos(3);
echo $y -> resumirCadFunc();
echo '<hr>';

$x = new Funcionario();
$x -> modificarNome('Gilmar');
echo $x -> resumirCadFunc();
echo '<hr>';


?>
