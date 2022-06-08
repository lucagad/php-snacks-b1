
<?php

// ## Snack 3
// Creare un array di array. 
// Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.

$posts = [

  '10/01/2019' => [
      [
          'title' => 'Post 1',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 1'
      ],
      [
          'title' => 'Post 2',
          'author' => 'Luigi Bianchi',
          'text' => 'Testo post 2'
      ],
  ],
  '10/02/2019' => [
      [
          'title' => 'Post 3',
          'author' => 'Carlo Rossi',
          'text' => 'Testo post 3'
      ]
  ],
  '15/05/2019' => [
      [
          'title' => 'Post 4',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 4'
      ],
      [
          'title' => 'Post 5',
          'author' => 'Luigi Bianchi',
          'text' => 'Testo post 5'
      ],
      [
          'title' => 'Post 6',
          'author' => 'Carlo Rossi',
          'text' => 'Testo post 6'
      ]
  ],
  '10/09/2020' => [
      [
          'title' => 'Post 7',
          'author' => 'Carlo Rossi',
          'text' => 'Testo post 7'
      ],
      [
          'title' => 'Post 8',
          'author' => 'Luigi Bianchi',
          'text' => 'Testo post 8'
      ],
      [
          'title' => 'Post 9',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 9'
      ]
  ],
];

// var_dump($posts);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>phpSnack 3</title>
  <style>

  .container{
    display: flex;
    justify-content: flex-start;
    align-items: flex-start;
  }

  .col{
    width: 300px;
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
  <h1>phpSnack 3</h1>
  <div class="container">
  <?php foreach ($posts as $date => $posts): ?>
    <div class="col">
      <?php 
        echo '<h2>' . $date . '</h2>';
        foreach ($posts as $post): ?> 
        <ul> 
          <li>
            <h4> Titolo : <?php echo $post['title']; ?> </h4>
            <p> Autore: <?php echo $post['author']; ?> </p>
            <p> Testo: <?php echo $post['text']; ?> </p>
          </li>
        </ul>
        <?php endforeach; ?>
    </div>
  <?php endforeach; ?>
  </div>
</body>
</html>