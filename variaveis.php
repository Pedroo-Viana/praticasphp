<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variavéis</title>
</head>

<body>

    <h1>Variavéis</h1>
    <div>
    <?php

    /*
    OPERADORES MATEMÁTICOS 
    SOMA = + 
    SUBTRAÇÃO = -
    MULTIPLICAÇÃO = *
    DIVISÃO = /
    POTENCIAÇÃO = ^
    -------------------
    CONDICIONAIS
    
    */
    echo("BRINCANDO COM OS VALORES<br>");
    $n1 =7.5;
    $n2 = 7.5;
    $media = (($n1 + $n2) / 2);

    echo("A nota 1 foi $n1<br>");
    echo("A nota 2 foi $n2<br>");
    echo("A media do aluno foi $media<br><br>");
    $resultado = ($media >= 7)? "APROVADO" : "REPROVADO<br>";
    echo("O ALUNO ESTÁ $resultado<br><br>");

    #TRABALHANDO CONCATENAÇÃO
    echo("TRABALHANDO CONTATENAÇÃO<br>");
    $nome = "Pedro";
    $sobrenome = "Viana";
   
    $anonascimento = 2003;

    echo("Meu nome é $nome $sobrenome e meu nickname é $nickname<br> Eu tenho " .(2023 - $anonascimento). " de idade");
    $valor1 = 111;
    $valor2 = 111;

    $valorresultado = ($valor1 === $valor2)? "<br>VALOR 1 É IDENTICO AO VALOR 2" : "<br>VALOR 1 É DIFERENTE DE VALOR 2";
    echo($valorresultado);
    ?>
    </div>


</body>

</html>