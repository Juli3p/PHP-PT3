<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Exercice 4</title>
</head>
<body>
  <div class="container-fluid text-center">
    <div class="jumbotron jumbotron-fluid bg-info">
      <div class="container">
        <h1 class="display-3">Exercices-04</h1>
        <p class="lead">PHP-Pt3</p>
      </div>
    </div>
  </div>
  <?php
    for ($x = 1; $x <= 10; $x=$x+($x/2)) {
      echo "<p>Le nombre est : $x</p>";
    }
     ?>
</div>
</body>
</html>

<!-- <.?php
  $first = 0;
  $second = rand(1,100);

  while($first<10){
    $third = $first * $second;
    // $first ++;?>
    <p><?php
    echo ' Le résultat est : ' . $third . ' '; ?>
    </p>
    <?php
  }
    ?.> -->
