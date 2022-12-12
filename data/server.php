<?php
if(isset($_POST['title']) && isset($_POST['genre']) && isset($_POST['pubblicationDate']) && isset($_POST['vote'])){
    $title = trim($_POST['title']);

    //controlli sull'input del genere
    $symbols = ["\\","/","-","_",".",";","|"];
    $genreChecked = str_replace($symbols, ",", trim($_POST['genre']));
    $genre = explode(',', $genreChecked);

    $pubblicationDate = intval($_POST['pubblicationDate']);
    date_default_timezone_set('Europe/Rome');
    $currentYear = date("Y");
    //controlli sull'input dell'anno di uscita
    if($pubblicationDate > $currentYear){
        $pubblicationDate = $currentYear;
    }
    //controlli sull'input del voto
    $vote = intval($_POST['vote']);
    if($vote > 5){
        $vote = 5;
    }elseif($vote < 0){
        $vote = 0;
    }
    $newMovie = [
        "title" => $title,
        "genres" => $genre,
        "pubblicationDate" => $pubblicationDate,
        "vote" => $vote,
        "description" => $_POST['description'] ?? ''
    ];
    $movies[] = $newMovie;
}
?>