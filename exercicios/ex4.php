<?php
   echo "Vamos calcular o valor de uma parcela e o valor da compra. ";
   $valor = 300;
   $valor2 = $valor + ($valor * 0.16);
   $parcela = $valor2 / 10;

   echo "<br> O valor da parcela ficou: $parcela <br>";
   echo "<br> O valor da compra depois de adicionar 16% ficou: $valor2 <br>";


?>