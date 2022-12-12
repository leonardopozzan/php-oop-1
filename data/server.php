<?php
if(isset($_POST['title']) && isset($_POST['genre']) && isset($_POST['pubblicationDate']) && isset($_POST['vote'])){
    $title = trim($_POST['title']);
    $genre = explode(',', trim($_POST['genre']));

    $pubblicationDate = intval($_POST['pubblicationDate']);
    date_default_timezone_set('Europe/Rome');
    $currentYear = date("Y");
    if($pubblicationDate > $currentYear){
        $pubblicationDate = $currentYear;
    }
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