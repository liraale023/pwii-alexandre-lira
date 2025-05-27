<html>
    <body>
      <?php
      $valor2 = $_GET["valor"] + ($_GET["valor"] * 0.16);
      echo "O valor pós parcela deu: $valor2";

      $parcela =  $valor2 / 10;
      echo "<br> <BR> Cada parcela vale: $parcela";
        ?>
    </body>
</html>