<?php


//
function condicionalIf(int $num):void
{
    if ($num > 0) :
        echo "el numero es positivo";
    else : echo "el numero es negativo";
    endif;
}

function operadorTernario(int $num): string{
    return $num >0 ? "numero positivo" : "numero negativo";
}
$num = 1;
$num2 = &$num;
echo $num."\n";
echo $num2."\n";
$num2 = 2;
echo $num."\n";

condicionalIf(3);
echo "\n".operadorTernario(-5);
