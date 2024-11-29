<?php
//Modelo -> Entidade

class Livro {

//Atributos -> Características
public $titulo= 'Assim que Acaba';
public $autor= 'colleen Hoover' ;
public $anoPublicacao = 1998;

//Método -> Ações
    function resumirCadFunc(){
    return "Livro $this->titulo, escrito por $this->autor no ano de $this->anoPublicacao";

    }
    function modificaranoPublicacao($anoPublicacao){
    $this->anoPublicacao = $anoPublicacao;  
    }

    //function modificarNome($alterarNome){
    //    $this->nome= $alterarNome;
    //}


}

//objeto -> Identidade
$y = new Livro();
echo $y ->resumirCadFunc();
echo '<hr>';
//$y->modificarnumFilhos(3);
//echo $y -> resumirCadFunc();
//echo '<hr>';

$x = new Livro();
$x -> modificaranoPublicacao(2024);
echo $x -> resumirCadFunc();
echo '<hr>';


?>
