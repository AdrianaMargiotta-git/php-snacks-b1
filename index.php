<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack 3A</title>
    <link rel="stylesheet" href="style.css">

    <?php
        require_once "data.php";
    ?>

</head>
<body>

    <!-- Partiamo da questo array di hotel. https://www.codepile.net/pile/OEWY7Q1G. Stampare tutti i nostri hotel con tutti i dati disponibili. Avremo un file PHP con il nostro "database" e un file con tutta la logica. -->
    
    <?php

        foreach($hotels as $indice => $hotel){
    ?>

        <div class="hotel">
                
            <!-- nome& description -->
            <h2><?php echo $hotel['name'] ?></h2>
            <p><?php echo $hotel['description'] ?></p>

            <!-- parking -->
            <div>
                <p>Parcheggio privato:
                    <?php
                        if ($hotel[parking]) {
                            echo "disponibile";
                        } else {
                            echo "non disponibile";
                        }
                                
                    ?>
                </p>
            </div>

            <!-- other -->
            <p>Valutazione: <?php echo $hotel['vote'] ?></p>
            <p>Distanza dal centro: <?php echo $hotel['distance_to_center'] ?> kM</p>
        </div>

    <?php       
        }
    ?>

</body>
</html>