<?php
//Operações com variáveis
$nome = "Hcode";

//concatenção de texto apenas na exibição
echo $nome . " mais alguma coisa";

echo "<br/>";
//Concatenando texto na variável
$nome .= " Treinamentos";

echo $nome;

echo "<br/>";

//Soma 
$valorTotal = 0;
$valorTotal += 100;
$valorTotal += 50;
echo "<br/>";
echo $valorTotal;
echo "<br/>";

//Subtração
$valorTotal -= 50;
echo $valorTotal;
echo "<br/>";

//Multiplicação
$valorTotal *= 50;
echo $valorTotal;
echo "<br/>";

//Divisão
$valorTotal /= 50;
echo $valorTotal;
echo "<br/>";



$a = 10;
$b = 2;
echo "operações com variáveis a = 10 e b =2";
echo "<br/>";
echo "Soma = ";
echo $a + $b;
echo "<br/>";
echo "subtração = ";
echo $a - $b;
echo "<br/>";
echo "Multiplicação = ";
echo $a * $b;
echo "<br/>";
echo "Divisão = ";
echo $a / $b;
echo "<br/>";
echo "Modulo/resto divisao = ";
echo $a % $b;
echo "<br/>";

?>