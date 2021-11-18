 <?php
// ESCOPO GLOBAL
$nome="Pedro";

function exibeNome(){
	global $nome;
	echo $nome;
}
exibeNome();
echo "<hr>";

//////////////////////
function exibeCidade(){
	//ESCOPO LOCAL
	global $cidade;
	$cidade = "Brodowski";
	
}

exibeCidade();
echo $cidade;
echo "<hr>";
//////////////////////
$a=1;
$b=4;
$c=8;

function Soma(){
	//Modo Certo:
	echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
	// Modo Errado: echo $a+$b+$c;
}
Soma();