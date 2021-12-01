<?php
// Caso duvidas olhar a documentação //

/*
-- EXPLICAÇAO DAS FUNÇOES DE ARRAYS --
is_array - Verifica se é array
in_array(x, y) - Verifica se exixte valor x no array y
array_keys - Retorna novo array com chaves do anterior
array_values - Retorna valores do array passado
array_merge - Concatena valores de arrays
array_pop - Exclui o valor da ULTIMA posição
array_shift - Exclui o PRIMEIRO Dado do array
array_unshift - Adiciona n valores no INICIO do array 
array_push - Adiciona n valores no FIM do array 
array_combine - Mescla 2 arrays
array_sum - Calcula a soma dos elementos de um array 
explode("/","10/12/"2021") - Transforma string em array 
inplode ("-", $args) - transforma array em string
*/

echo "01  - is_array<br>";
$nomes = array("Pedro", "Rafael", "Thiago");

if (is_array($nomes)) :
    echo "É array...";
else :
    echo "Não é array...";
endif;

echo "<hr>";

echo "02  - in_array<br>";
echo in_array("Carlos", $nomes); //Como nao existe "Carlos" no array nao vai ter retorno...
echo in_array("Pedro", $nomes);

echo "<br>";

if (in_array("Pedro", $nomes)) :
    echo "Pedro existe no array";
else :
    echo "Pedro não Existe no Array";
endif;
echo "<br>";
if (in_array("Thiago", $nomes)) :
    echo "Carlos existe no array";
else :
    echo "Carlos não Existe no Array";
endif;

echo "<hr>";
echo "03  - array_keys<br>";
$tiposNome = array("Eu" => "Pedro", " Professor" => "Rafael", " Colega" => "Thiago");
$keys = array_keys($tiposNome);
print_r($keys);

echo "<hr>";
echo "04  - array_values<br>";
$values = array_values($tiposNome);
print_r($values);

echo "<hr>";
echo "05  - array_merge<br>";
$carros = array("Civic", "Porch", "Tesla");
$motos = array("pop100", "Vespa", "Bis");

print_r(array_merge($carros, $motos)); //Veiculos...

echo "<hr>";
echo "06  - array_pop<br>";
array_pop($carros);
print_r($carros);
echo "<br><label>O item 'Tesla' foi apagado </label>";

echo "<hr>";
echo "07  - array_shift<br>";
array_shift($carros);
print_r($carros);
echo "<br><label>O item 'Civic' foi apagado </label>";

echo "<hr>";
echo "08  - array_unshift<br>";
$frutas = array("Uva", "Laranja", "Maça");
print_r($frutas);
echo "<br>";
array_unshift($frutas, "Banana", "Manga", "Cocô");
print_r($frutas);

echo "<hr>";
echo "09  - array_push<br>";
print_r($frutas);
echo "<br>";
echo "<br>";
array_push($frutas, "Carambola", "Morango");
print_r($frutas);

echo "<hr>";
echo "10  - array_combine<br>";
$keys = array("Linguagem", "Framework", "Biblioteca");
$Values2 = array("Php", "Laravel", "Eden");

$Programacao = array_combine($keys, $Values2);
print_r($Programacao);

echo "<hr>";
echo "11  - array_combine<br>";
$soma = array(6,7,9,2,0);
$total = array_sum($soma);

echo "<br>".$total;


echo "<hr>";
echo "12  - explode<br>";
$data = "10/12/2021";
$novaData = explode("/", $data);

print_r($novaData);

echo "<hr>";
echo "13  - implode<br>";
$nomes =array("Pedro", " Maria", " Jair");
$string = implode(",", $nomes);
print_r($string);