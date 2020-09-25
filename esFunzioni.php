<html>
  <body>
    <?php


      function scriviNome($nome, $cognome){
        echo $nome . " " . $cognome;
      }

      echo "Mi chiamo ";
      $pogliani = "Pogliani;"
      scriviNome("Mattia", $pogliani);

      function returnSomma($n, $m){
        $somma = $n + $m;
        return $somma;
      }

      $n = 4;
      $m = 7;
      echo "La somma di " .$n. " e " .$m. " fa ".returnSomma($n, $m);

    ?>
  </body>
</html>
