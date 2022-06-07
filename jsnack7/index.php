<?php 

// ## Snack 7
// Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.

$classroomArray = [
  [
    'name' => 'Gianluca',
    'lastname' => 'Rossi',
    'voteArray' => [ 6, 8 ,9 ,3 ,8]
  ],
  [
    'name' => 'Claudio',
    'lastname' => 'Verdi',
    'voteArray' => [ 10, 8 , 7 ,5 ,6]
  ],
  [
    'name' => 'Clarissa',
    'lastname' => 'Bianchi',
    'voteArray' => [ 9, 8 ,9 ,7 ,8]
  ]
];



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JSnack 7</title>
</head>
<body>

  <h2>JSnack 7</h2>
  <ul>
    <?php 
      for ($i = 0; $i < count($classroomArray); $i++ ){

        $mediaVote  = 0;
        $numberOfVote = count($classroomArray[$i]['voteArray']);

        for ($y = 0; $y < $numberOfVote; $y++ ){
          $mediaVote += $classroomArray[$i]['voteArray'][$y];
        }
        $mediaVote = $mediaVote / $numberOfVote ;
        echo '<li>'. $classroomArray[$i]['name'] .' '. $classroomArray[$i]['lastname']. ' - Media Voti: ' . $mediaVote . ' </li>';
      }
    ?>
  </ul>
  
</body>
</html>