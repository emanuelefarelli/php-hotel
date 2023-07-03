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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP 5.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


    <title>hotel php</title>

    <style>
        ul{
            list-style-type: none;
        }
    </style>

</head>
<body>
    <h1 class="py-5 text-center bg-primary text-light">
        Hotel diponibili:
    </h1>
    <ul>
        <?php foreach($hotels as $hotel) { ?>
            <li class="text-center">
                <h2 class="fs-1">
                    <?php echo $hotel['name']; ?>
                </h2>
                <p>
                    <?php echo $hotel['description'];?>
                </p>
                <p>
                    Parking: <?php 
                        if($hotel['parking'] === true){
                            echo "Disponibile";
                        }else{
                            echo "Non disponibile";
                        };
                    ?>
                </p>
                <p>
                    Vote: <?php echo $hotel['vote'];?>
                </p>
                <p>
                    Distance to center: <?php echo $hotel['distance_to_center'];?>
                </p>
                <hr>
            </li>
        <?php } ?>
    </ul>
</body>
</html>