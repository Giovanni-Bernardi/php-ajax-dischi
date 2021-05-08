<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP dischi</title>

    <!-- favicon -->
    <link rel="icon" href="disc-favi.png" type="favicon" sizes="16x16">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Vue -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <!-- JS -->
    <script src="script.js"></script>
</head>

<body>
    <!-- top title -->
    <div id="title">
        <span>La tua Libreria</span>
    </div>
    <!-- main container -->
    <div class="container">
        <div id="app" class="library">
            <div id="menu">
                <select @change="getGenre" v-model="filterKey">
                    <option v-for="(genre,index) in genres">
                        {{ genre }}
                    </option>
                </select>
            </div>
            <!-- album boxes -->
            <div id="album-box">
                <div class="album" v-for="album in filterByGenre">
                    <div class="album-cover">
                        <i class="fas fa-play" class="play-hover"></i>
                        <img :src="album.poster">
                    </div>
                    <h2 class="album-text title">
                        {{ album.title }}
                    </h2>
                    <h3 class="album-text author">
                        {{ album.author }}
                    </h3>
                    <small>
                        {{ album.year }}
                    </small>
                </div>
            </div>
        </div>
    </div>


</body>

</html>