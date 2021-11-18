<?php 
//Tipos de dados em PHP
//-------------ESCALARES--------------//

//String --
$teste = "Ola Mundo"; 
var_dump($teste);
echo "<br>";
if (is_string($teste)) {
	echo "String...";
}else{
	echo "Nao e string";
}
echo "<hr>";

//Int --
$idade = 10; 
var_dump($idade);
echo "<br>";
if (is_numeric($idade)) {
	echo "Int...";
}else{
	echo "Nao e int";
}
echo "<hr>";

//Float --
$altura = 1.70; 
var_dump($altura);
echo "<br>";
if (is_float($altura)) {
	echo "Float...";
}else{
	echo "Nao e Float";
}
echo "<hr>";

//Boolean --
$Is_admin = true; 
var_dump($Is_admin);
echo "<br>";
if (is_bool($Is_admin)) {
	echo "Bool...";
}else{
	echo "Nao e Bool";
}
echo "<hr>";


// ------------COMPOSTOS-------------//
//Array
$carros = array("Gol", "Prata","HAG-173");
var_dump($carros);
echo "<br>";
if (is_array($carros)) {
	echo "Array...";
}else{
	echo "Nao e Array";
}
echo "<hr>";

//Objetos
class Clientes
{
	public $nome;
	public function atribuirNome($nome){
		$this->$nome = $nome;
	}
}

$Clientes = new Clientes();
$Clientes->atribuirNome("Pedro");
var_dump($Clientes);
echo"<br>";
if (is_object($Clientes)) {
	echo "Objeto...";
}else{
	echo "Nao e Objeto";
}
echo "<hr>";


//---------------ESPECIAIS------------//
//Null
//Resourse -- Conexao em banco de dados, manipulaçao de arquivos....(Recursos externos)

