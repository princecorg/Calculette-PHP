<!DOCTYPE html>
<html lang="fr"> 
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma calculatrice</title>
  </head>
  
  <body>
    <form action = "<?php print $_SERVER['PHP_SELF'];?>" method = "post">

    Valeur 1:
      <input type = "text" name = "val1" size = "10">
      Valeur 2:
      <input type = "text" name = "val2" size = "10">

      Opération: 
      <input type = "radio" name = "operation" value = "add"> Addition
      <input type = "radio" name = "operation" value = "sous"> Sustraction
      <input type = "radio" name = "operation" value = "mul"> Multiplication
      <input type = "radio" name = "operation" value = "div"> Division
      <hr />
      <input type = "submit" value = "Calculate">
      <input type = "reset" value = "Clear">
    </form>
  </body>
</html>
<?php

if(isset($_POST['val1']) && isset($_POST['val2']) && isset($_POST['operation'])) {
    $val1 = $_POST['val1'];
    $val2 = $_POST['val2'];
    $operation = $_POST['operation'];

    if(is_numeric($val1) & is_numeric($val2)) {
        if($operation != null) {
            switch($operation) {
                case "add": $result = $val1 + $val2;
                    break;
                case "mul": $result = $val1 * $val2;
                    break;
                case "sous": $result = $val1 - $val2;
                    break;
                case "div": if ($val2 != 0) {
                    $result = $val1 / $val2;
                    break;
                } else {
                    $result = "impossible de diviser par zéro ";
                }
            }
            echo("Résultat de Calcul:<b> $result</b>");
        }
    } else {
        echo("Données invalide, veillez ré-essayer ");
    }

}
