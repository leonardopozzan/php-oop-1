<?php
include_once './models/movie.php';
$detailsOne= [
    "title" => "Titanic",
    "genres" => ["Romantico", "Drammatico"],
    "pubblicationDate" => 1997,
    "vote" => 5,
    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet ipsum, est praesentium et quae aperiam."
];
$detailsTwo = [
    "title" => "Poseidon",
    "genres" => ["Azione", "Avventura"],
    "pubblicationDate" => 2006,
    "vote" => 3,
    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet ipsum, est praesentium et quae aperiam."
];

$movieOne = new Movie($detailsOne["title"], $detailsOne["genres"], $detailsOne["pubblicationDate"], $detailsOne["vote"], $detailsOne["description"]);
$movieTwo = new Movie($detailsTwo["title"], $detailsTwo["genres"], $detailsTwo["pubblicationDate"], $detailsTwo["vote"]);

var_dump($movieOne);
var_dump($movieTwo);

?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous' referrerpolicy='no-referrer' />
    <link rel='stylesheet' href='./css/style.css'>
    <script src='https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js'></script>
    <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
    <script src='./js/script.js' defer></script>
    <title>Document</title>
</head>

<body>
    
</body>
</html>