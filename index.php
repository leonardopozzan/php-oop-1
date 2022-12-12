<?php
include_once './models/movie.php';
include_once './data/db.php';

// foreach($movies as $movie){
//     $movieObj = new Movie($movie["title"], $movie["genres"], $movie["pubblicationDate"], $movie["vote"], $movie["description"]);
//     var_dump($movieObj);
// }
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel="shortcut icon" href="#">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Teko:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous' referrerpolicy='no-referrer' />
    <link rel='stylesheet' href='./css/style.css'>
    <script src='https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js'></script>
    <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
    <script src='./js/script.js' defer></script>
    <title>My-Movie</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center py-4 fw-bold text-white text-decoration-underline text-uppercase">
            Most viewed movies
        </h1>
        <div class="form-box">
            <h2>Inserisci un nuovo film...</h2>
            <div class="instructions">* inserisci i generi senza spazi e separati da virgole</div>
            <form action="db.php" method="post" class="my-form">
                <div class="d-flex flex-wrap col-6 col-lg-3 align-items-start">
                    <label for="" class="col-4 col-lg-4 pb-2">Titolo</label>
                    <input type="text" class="col-8 col-lg-8" required>
                    <label for="" class="col-4 col-lg-4" >Generi</label>
                    <input type="text" class="col-8 col-lg-8" required>
                </div>
                <div class="d-flex flex-wrap col-6 col-lg-3 align-items-start"> 
                    <label for="" class="col-6 col-lg-6 ps-1 pb-2">Anno di Uscita</label>
                    <input type="number" class="col-6 col-lg-6" required>
                    <label for="" class="col-6 col-lg-6 ps-1">Voto</label>
                    <input type="number" class="col-6 col-lg-6" required>
                </div>
                <div class="d-flex flex-wrap col-12 col-lg-6 align-items-start mt-2 mt-lg-0">
                    <label for="" class="col-3 col-lg-3 ps-1">Descrizione</label>
                    <textarea name="" rows="4" class="col-9 col-lg-9"></textarea>
                </div>
                <div>
                    <button class="btn btn-dark">Invia</button>
                </div>
            </form>
        </div>
        <div class="cards">
            <?php foreach ($movies as $key => $movie) { 
                $movieObj = new Movie($movie["title"], $movie["genres"], $movie["pubblicationDate"], $movie["vote"], $movie["description"]);
                ?>
                <div class="my-card">
                    <div class="img-box"><img src="https://picsum.photos/1200/800?random=<?php echo $key ?>"></div>
                    <div class="description">
                        <div class="title">
                            <?php echo $movieObj->getTitle() ?>
                        </div>
                        <div class="pb-1 fst-italic">
                            <?php foreach($movieObj->getGenres() as $genre) echo $genre . ' ' ?>
                        </div>
                        <div class="pb-1">
                            <?php
                            if($movieObj->getPubblicationDate()){
                                echo $movieObj->getPubblicationDate(). ' Uscito ' . $movieObj->getPassedYears() . " anni fa";
                            }else{
                                echo "Unknown";
                            }
                            ?>
                        </div>
                        <div>
                            <?php
                            if($movieObj->getVote()){
                                for($numb = 1; $numb <= $movieObj->getVote(); $numb++) echo "<i class='fa-solid fa-star text-warning'></i>";
                            }else{
                                echo "Not Voted";
                            }
                            ?>
                        </div>
                    </div>
                    <div class="plot">
                        <?php echo $movieObj->getDescription() ?>
                    </div>
                </div>
            <?php }  ?>
        </div>
    </div>
</body>
</html>