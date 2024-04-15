<?php

$hotels = [

  [
    'name' => 'Hotel Belvedere',
    'description' => 'Hotel Belvedere Descrizione',
    'parking' => true,
    'vote' => 4,
    'distance_to_center' => 10.4
  ],
  [
    'name' => 'Hotel Futuro',
    'description' => 'Hotel Futuro Descrizione',
    'parking' => true,
    'vote' => 2,
    'distance_to_center' => 2
  ],
  [
    'name' => 'Hotel Rivamare',
    'description' => 'Hotel Rivamare Descrizione',
    'parking' => false,
    'vote' => 1,
    'distance_to_center' => 1
  ],
  [
    'name' => 'Hotel Bellavista',
    'description' => 'Hotel Bellavista Descrizione',
    'parking' => false,
    'vote' => 5,
    'distance_to_center' => 5.5
  ],
  [
    'name' => 'Hotel Milano',
    'description' => 'Hotel Milano Descrizione',
    'parking' => true,
    'vote' => 2,
    'distance_to_center' => 50
  ],

];


// foreach ($hotels as $hotel) {
//   echo "Nome: " . $hotel['name'];
//   echo "Informazioni: " . $hotel['description'];
//   echo "Parcheggio: " . $hotel['parking'];
//   echo "Voto: " . $hotel['vote'];
//   echo "Distanza dal centro: " . $hotel['distance_to_center'] . " Km";
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.css' integrity='sha512-VcyUgkobcyhqQl74HS1TcTMnLEfdfX6BbjhH8ZBjFU9YTwHwtoRtWSGzhpDVEJqtMlvLM2z3JIixUOu63PNCYQ==' crossorigin='anonymous' />
  <link rel="stylesheet" href="style.css">

  <title>PHP Hotel</title>
</head>

<body>
  <div class="container my-5 d-flex justify-content-center ">

    <div class="card" style="width: 18rem;">
      <ul class="list-group list-group-flush">
        <?php foreach ($hotels as $hotel) : ?>
          <li class="list-group-item"><?php echo "Nome: " . $hotel['name']; ?></li>
          <li class="list-group-item"><?php echo "Informazioni: " . $hotel['description']; ?></li>
          <li class="list-group-item"><?php echo $hotel['parking'] ? "Parcheggio: Si" : "Parcheggio: No"; ?></li>
          <li class="list-group-item"><?php echo "Voto: " . $hotel['vote']; ?></li>
          <li class="list-group-item"><?php "Distanza dal centro: " . $hotel['distance_to_center'] . " Km"; ?></li>
        <?php endforeach ?>
      </ul>
    </div>

  </div>


</body>

</html>