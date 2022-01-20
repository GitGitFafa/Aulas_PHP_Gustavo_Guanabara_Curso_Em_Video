<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operadores Aritméticos no PHP</title>
</head>
<body>
  <?php
    $n1 = 5;
    $n2 = 5;
    $soma = $n1+$n2;
    $media =($n1+$n2)/2;
   // echo "A soma entre $n1 e $n2 tem como resultado o valor ". $soma. ".";
    echo "<br/>A soma entre $n1 e $n2 tem como resultado o valor " .($n1+$n2). ".";
    echo "<br/>A subtração entre $n1 e $n2 tem como resultado o valor " .($n1-$n2). ".";
    echo "<br/>A multiplicação entre $n1 e $n2 tem como resultado o valor " .($n1*$n2). ".";
    echo "<br/>A divisão entre $n1 e $n2 tem como resultado o valor " .($n1/$n2). ".";
    echo "<br/>O módulo entre $n1 e $n2 tem como resultado o valor " .($n1%$n2). ".";

    echo "<br/> A média entre $n1 e $n2 tem como resultado o valor " .$media. ".";

  ?>
</body>
</html>