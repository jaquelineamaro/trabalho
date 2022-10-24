
<?php
function adição($e, $u) 
{
    return $e + $u;
}

echo adição(12, 13) . "<br>";
echo adição(1, 2, 3) . "<br>";

echo "<br>";

/*function adiçãototal(...$numeros) 
{
    $adição = 0;
    foreach($numeros as $num) 
    {
        $adição += $num;
    }
    return $adição;
}

echo adiçãototal(1, 2, 3, 4, 5);*/

echo "<br>";

/*function familiares($titular, ...$dependentes) 
{
    echo "Titular: $titular <br>";
    if($dependentes) 
    {
        foreach($dependentes as $dep) 
        {
            echo "Dependente: $dep <br>";
        }
    }
}

echo "<br>";
familiares("Adelson", "Jaqueline", "Andrea", "Tiago");

echo '<br>';
familiares("Geraldo", "Fernandes");*/