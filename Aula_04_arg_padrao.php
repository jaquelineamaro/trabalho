
<?php
function homenagem($nome = "Caro", $sobrenome = "funcionario") 
{
    return ", $nome $sobrenome!<br>";
}

echo homenagem();
echo homenagem(null);
echo homenagem(null, null);
echo ("Carissimo", "Colaborador");

echo "<br>";

function escreverDesejo($comida, $bebida = "Agua") 
{
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

escreverDesejo("Cachorro quente");
//escreverDesejo("Pizza", "");

echo "<br>";

function escreverDesejo2($bebida = "Água", $comida) {
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}


escreverDesejo("Refrigerante2", "Pizza2");