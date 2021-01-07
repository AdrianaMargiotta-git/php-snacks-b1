<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack 3A Bonus</title>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div id="app">
        <div class="hotel" v-for="hotel in hotels">
            <h2>{{hotel.name}}</h2>
            <p>{{hotel.description}}</p>
            <p v-if="hotel.parking">Parcheggio privato: disponibile</p>
            <p v-else>Parcheggio privato: non disponibile</p>
            <p>Votazione: {{hotel.vote}}</p>
            <p>Distanza dal centro: {{hotel.distance_to_center}}km</p>
        </div>
    </div>

    
    <script type="text/javascript" src="script.js"></script>
    
</body>
</html>