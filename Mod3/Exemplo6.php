<?php

    $a = 30;
    $b = 55;

    var_dump($a > $b); //pode ser >=

    echo "<br/>";

    var_dump($a < $b); //pode ser <=

    echo "<br/>";
    // Utilizar == para comparar valor === para comparar valor e tipo, utilizar apenas um = atruirá o valor da primeira variável para a segunda
    var_dump($a == $b);

    echo "<br/>";

    var_dump($a != $b);

    echo "<br/>";

    //quando utilizar duas condições e = && e ou = ||

//Operadores PHP 7

    //space ship se a for maior que b retorna 1, se forem iguais 0 e se b for maior -1
    var_dump($a <=> $b);

    echo "<br/>";

    $c = null;
    $d = null;

    //se valor for nulo ?? exibe a próxima, no caso, se d for nulo exibe c, se c também for exibe b e a mesma coisa em relação ao a
    echo $d ?? $c ?? $b ?? $a;
    echo "<br/>";

    //incrementa 1 e reduz 1
    $var = 10;
    echo ++$var;
    echo "<br/>";
    echo --$var;
    echo "<br/>";

    //Respeita a ordem de execução das operações como na matematica
    $resultado = $a + $b / $var;
    echo $resultado;
    echo "<br/>";
    $resultado = ($a + $b) / $var;
    echo $resultado;
    echo "<br/>";

?>