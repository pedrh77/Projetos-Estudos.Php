<?php
// if(/*Algo acontecer*/):
//     //argumentos
// elseif():
//     //argumetos
// else:
//     //argumentos
// endif;

$numero = 256;
if ($numero == "10") :
    echo "Numero igual a $numero";
else :
    echo "Numero Diferente de $numero";
endif;
echo "<br>";
if ($numero == "256") :
    echo "Numero igual a $numero";
else :
    echo "Numero Diferente de $numero";
endif;
echo "<hr>";
$media = 3;
echo ($media >= 7) ? "Aprovado" : "Reprovado";

echo "<br>";

$media2 = 9;
echo ($media2 >= 7) ? "Aprovado" : "Reprovado";
