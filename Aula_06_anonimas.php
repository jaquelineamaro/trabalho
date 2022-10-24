
<?php

$soma1= function ($i, $r) 
{
    return $i + $r;
};

echo $soma1(3, 9) . "<br>";


echo "<br>";


function executar1($f, $p, $op, $funcao) 
{
    $resultado = $funcao($f, $p);
    echo "$a $op $b = $resultado <br>";
}

executar1(5, 4, '+', $soma);


echo "<br>";


$multiplicacao1 = function($a, $b) 
{
    return $a * $b;
};

executar1(2, 3, '*', $multiplicacao1);

