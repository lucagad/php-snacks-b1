<?php 

// ## Snack 4
// Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta

function getArrayOfIntegers($min, $max, $nItems){
  $newArray = [];
  while (count($newArray) < $nItems){
    $number = rand($min,$max);
  
    if (!in_array($number,$newArray)){
      $newArray[] = $number;
    }
  }
  
  return $newArray;
}

$numberRandom = getArrayOfIntegers(0, 30, 15);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JSnack 4</title>
</head>
<body>

  <h2>JSnack 4</h2>
  <ul>
    <?php 
      for ($i = 0; $i < count($numberRandom); $i++ ){
        echo '<li>'. $numberRandom[$i]. '</li>';
      }
    ?>
  </ul>
  
</body>
</html>