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

$parcheggio = isset($_GET['parcheggio']) ? $_GET['parcheggio'] : 'all';
$voto = isset($_GET['voto']) ? $_GET['voto'] : 'all';


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
  <div class="container my-5">
    <div class="row">
      <div class="col-12">
        <form action="index.php" method="GET">
          <label for="parcheggio">Filtra per parcheggio:</label>
          <select class="form-control  mb-3" aria-label="Default select example" id="parcheggio" name="parcheggio">
            <option value="all">Tutti</option>
            <option value="true">Si</option>
            <option value="false">No</option>
          </select>

          <label for="voto">Filtra per voto:</label>
          <select class="form-control" aria-label="Default select example" id="voto" name="voto">
            <option value="all">Tutti</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
          <button type="submit" class="btn btn-primary mt-3">Filtra</button>
        </form>
      </div>



    </div>
    <div class="container my-5 d-flex justify-content-center flex-wrap">


      <?php foreach ($hotels as $hotel) :  ?>
        <div class="card m-3" style="width: 18rem;">
          <ul class="list-group list-group-flush ">
            <li class="list-group-item"><?php echo "Nome: " . $hotel['name']; ?></li>
            <li class="list-group-item"><?php echo "Informazioni: " . $hotel['description']; ?></li>
            <li class="list-group-item"><?php echo $hotel['parking'] ? "Parcheggio: Si" : "Parcheggio: No"; ?></li>
            <li class="list-group-item"><?php echo "Voto: " . $hotel['vote']; ?></li>
            <li class="list-group-item"><?php echo "Distanza dal centro: " . $hotel['distance_to_center'] . " Km"; ?></li>
          </ul>
        </div>
      <?php endforeach ?>

    </div>


</body>

</html>