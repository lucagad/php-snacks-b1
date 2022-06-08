
<?php

// ## Snack 6
// Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.

$db = [
  'teachers' => [
      [
          'name' => 'Michele',
          'lastname' => 'Papagni'
      ],
      [
          'name' => 'Fabio',
          'lastname' => 'Forghieri'
      ]
  ],
  'pm' => [
      [
          'name' => 'Roberto',
          'lastname' => 'Marazzini'
      ],
      [
          'name' => 'Federico',
          'lastname' => 'Pellegrini'
      ]
  ]
];

// var_dump($db);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>phpSnack 6</title>
  <style>

  .container{
    display: flex;
    justify-content: flex-start;
    align-items: flex-start;
  }

  .square{
    width: 200px;
    height: 100%;
  }

    .teachers{
      background-color: grey;
    }

    .pm{
      background-color: green;
    }
  
  </style>

</head>
<body>
  <h2>phpSnack 6</h2>
  <div class="container">
  <?php foreach ($db as $role => $people) { ?>
    <div class="square <?php echo $role ?> ">
      <?php foreach ($people as $person) { ?> 
        <ul> 
          <?php echo "<li>" . $person['name']. ' '.$person['lastname'] . "</li>" ?>
        </ul>
        <?php
          }
        ?>
    </div>
  <?php } ?>
  </div>
</body>
</html>