<?php
/* Imagine que voce quer listar todos os carros da sua garagem:
Logo voce imagina....
$carro1 = "Bmw"
$carro2 = "Jaguar"
$carro3 = "Tesla"

Ficaria muito mais facil com arrays certo??
Vamos lá....
*/
$Carros = array("Bmw","Jaguar","Tesla");
print_r($Carros); // Lista todos os itens
echo "<br>";
echo $Carros[2];// Mostra um especifico

/*Vamos supor que voce compre mais um carro, para adicionalo no array voce deve fazer*/

$Carros[] = "Amarok";
print_r($Carros);
