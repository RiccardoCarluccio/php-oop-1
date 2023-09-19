<?php
  require_once __DIR__ . '/classes/Movie.php';

  $movie1 = new Movie('titolo1', 'genere1', 'descrizione1.');
  $movie2 = new Movie('titolo2', 'genere2', 'descrizione2.');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-oop-1</title>
</head>
<body>
  
  <div>
    <h2>
      <?php echo this->titolo ?>
    </h2>
  </div>

</body>
</html>