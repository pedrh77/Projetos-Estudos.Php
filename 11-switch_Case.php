<?php

$materia = "Quimica";

switch ($materia):
    case "Matematica":
        echo "Materia favorita: Matematica";
        break;
    case "Portugues":
        echo "Materia favorita: Portugues";
        break;
    case "Fisica":
        echo "Materia favorita: Fisica";
        break;
        default:
        echo "Sua Materia favorita não é Matematica, Protugues ou Fisica";
endswitch;
