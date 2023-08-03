<?php
//nome da classe
class Fruta{
    //nome dos atributos
    public $nome;
    public $cor;

    /*Métodos */
    function __construct($nome, $cor){
        $this->nome = $nome;
        $this->cor = $cor;

    }
    function set_name($nome){
        $this->nome = $nome;
    }
    function set_cor($cor){
        $this->cor = $cor;
    }
    function get_name(){
        return $this->nome;
    }
    function get_cor(){
        return $this->cor;
    }


}
//A palavra new cria um objeto do tipo Fruta
$maca = new Fruta("maca_ifsp","vermelho");
//atribuindo um nome para o meu objeto através do método set_name
//$maca->set_name("maca_ifsp");
//o comando abaixo imprime se o atributo for public
//echo $maca->nome;
/*o comando abaixo imprime se o atributo for public*/
echo "</br>".$maca->get_name();
$maca->set_cor("vermelho");
echo "</br>".$maca->get_cor ();
?>

