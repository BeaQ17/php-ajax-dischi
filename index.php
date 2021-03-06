<?php
require __DIR__ . '/database/albums.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Ajax Dischi</title>
    <!-- CSS -->
    <link rel="stylesheet" href="./dist/css/app.css">
</head>
<body>

    <div id="root">
        <nav><img src="./dist/imgs/logo.png" alt="logo img"></nav>
    </div>

    <div class="container">
        
    </div>
    

    <!-- VUE JS -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <!-- AXIOS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" 
    integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- JS -->
    <script src="./dist/js/app.js"></script>
</body>
</html>