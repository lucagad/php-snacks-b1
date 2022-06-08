<?php 

// ## Snack 1
// Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
// Olimpia Milano - Cantù | 55-60


$matchArray = [
  [
    'playerHost' => 'Squadra 1',
    'pointHost' => 2,
    'playerGuest' => 'Squadra 2',
    'pointGuest' => 0
  ],
  [
    'playerHost' => 'Squadra 3',
    'pointHost' => 1,
    'playerGuest' => 'Squadra 4',
    'pointGuest' => 1
  ],
  [
    'playerHost' => 'Squadra 5',
    'pointHost' => 0,
    'playerGuest' => 'Squadra 6',
    'pointGuest' => 3
  ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>phpSnack 1</title>
</head>
<body>

  <h2>phpSnack 1</h2>
  <ul>
    <?php 
      for ($i = 0; $i < count($matchArray); $i++ ){
        echo '<li>'. $matchArray[$i]['playerHost'] .' - '. $matchArray[$i]['playerGuest'] .' | '. $matchArray[$i]['pointHost'] .' - '. $matchArray[$i]['pointGuest']. '</li>';
      }
    ?>
  </ul>
  
</body>
</html>