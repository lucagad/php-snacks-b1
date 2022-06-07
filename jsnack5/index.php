<?php 

// ## Snack 5
// Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
// aggiungete poi i seguenti snack da realizzare


$paragh = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit libero asperiores totam qui. Porro esse consequuntur doloremque necessitatibus error! Odio, possimus magnam! Reprehenderit maiores ea dolores amet, eius eaque nesciunt. Dolor eius iusto alias, a consectetur possimus maiores mollitia? Doloremque sunt quae sequi perspiciatis soluta animi numquam natus ab at doloribus cum voluptatem, ex commodi ipsa nihil quidem. Deleniti natus error modi consequuntur aspernatur quidem molestiae ut doloremque incidunt, et cumque consequatur dicta corrupti, facilis quam voluptatem? Ipsa iusto placeat odio quod officia sequi nobis quia minima iure dolorem asperiores saepe consequatur repellat sint, temporibus debitis, recusandae doloremque maiores necessitatibus.';

$paraghArray[] = explode(".", $paragh);


// var_dump($paraghArray);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JSnack 5</title>
</head>
<body>

  <h2>JSnack 5</h2>
  <ul>
    <?php 
      for ($i = 0; $i < count($paraghArray[0]); $i++ ){
        if($paraghArray[0][$i] != '') {echo '<li>'. $paraghArray[0][$i]. '</li>';}
      }
    ?>
  </ul>
  
</body>
</html>