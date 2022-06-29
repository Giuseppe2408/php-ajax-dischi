<?php
    include_once __DIR__ . './database/db.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Document</title>
</head>
<body>
    <div id="app">
        <header>
            <img id="logo" src="https://i.kinja-img.com/gawker-media/image/upload/s--ypN6iH9q--/c_fill,fl_progressive,g_center,h_900,q_80,w_1600/zrarqnhmkoaihvzss5ek.jpg" alt="">
        </header>
        <div id="list">
            <div id="mycard" v-for="card in arrayMusic">
                <div>
                    <img :src="card.poster" :alt="card.title">
                </div>
                <h1>
                    {{card.title}}
                </h1>
                <span id="margin-t">
                    {{card.author}}
                </span>
                <span>
                    {{card.year}}
                </span>
            </div>
        </div>
    </div>
    
    


    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.0.0-alpha.1/axios.min.js"></script>
    <script src="./assets/main.js"></script>
</body>
</html>