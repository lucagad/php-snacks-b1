<?php 

// ## Snack 4
// Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta


var_dump($_GET);


$isAuth = true;
$error = '';


// verifico l'esistenza dei parametri necessari in $_GET
if(empty($_GET['name']) || empty($_GET['mail']) || empty($_GET['age'])){
  $error = 'Inserire tutti i dati';
  $isAuth = false;
}elseif(strlen($_GET['name']) < 3 ){  
  // verifico la lunghezza di name
  $error = 'Il nome deve essere lungo almeno 3 caratteri';
  $isAuth = false;
}elseif(!strpos($_GET['mail'], '@') || !strpos($_GET['mail'], '.')){
  // verifico se sono presenti @ e .
  $error = 'La mail deve avere la chicciola e il punto';
  $isAuth = false;
}elseif(!is_numeric($_GET['age'])){
  // verifico che age sia un numero
  $error = 'Age deve essere un numero';
  $isAuth = false;
}


if($isAuth ){
  $output = 'Accesso riuscito';
}else{
  $output = 'Accesso negato';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>phpSnack 2</title>
</head>
<body>

  <h2>phpSnack 2</h2>
  <h1><?php echo $output ?></h1>

  <?php if(!$isAuth): ?>
    <i>Errore: <?php echo $error ?></i>
  <?php endif; ?>
  
</body>
</html>