
<?php
function aparecerMensagem() 
{
    return "Seja bem vindo(a)!";
}

aparecerMensagem();
$j =  aparecerMensagem();
echo $j;
echo "<br>",  aparecerMensagem();
echo "<br>";

echo "<br>";

function  aparecerMensagemComNome($nome) 
{
    return "Ola professor, {$nome}!";
}

echo "<br>", aparecerMensagemComNome("José");
echo "<br>", aparecerMensagemComNome("Souza");

echo "<br>";

function soma($f, $g) 
{
    return $f+ $g;
    
}

$x = 9;
$y = 2;
echo "<br>", soma(45, 78);
echo "<br>", soma($x, $y);

