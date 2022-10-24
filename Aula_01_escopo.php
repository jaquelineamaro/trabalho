
<?php
function mostrarMensagens() 
{
    echo "Programando php? <br>";
    echo "Aprendendo funções em PHP!<br>";
}

mostrarMensagens();
mostrarMensagens();
mostrarMensagens();

echo "<br>";

$variavel = 1;

function mudarValor() 
{
    $variavel = 3;
    echo "Executando a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
mudarValor();
echo "Depois: $variavel <br>";

echo "<br>";

function mudarValor() 
{
    global $variavel;
    $variavel = 4;
    echo "Efetuando a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
mudarValor();
echo "Depois: $variavel <br>";