<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>MOVIE LIST</h1>

<div class="container">

    <?php

    // definire classe movie
    class Movie {

        // dichiarazione variabili di istanza
        public $title;
        public $genre;
        public $year;
        public $duration;

        // definito il costruttore
        public function __construct($title, $genre, $year, $duration) {

            $this -> title = $title;
            $this -> genre = $genre;
            $this -> year = $year;
            $this -> duration = $duration;
        }

        public function getMovie() {

        return "<div class = movie> MOVIE: </div>" . $this -> title 
        . " / " . $this -> genre
        . " / " . $this -> year
        . " / " . $this -> duration
        . "<br>" . "<br>";
        }
    }

    $movieList = [
        new Movie("Ritorno al futuro", "Sci-fi/Commedia ", "18 ottobre 1985", "1h-56m"),
        new Movie("Harry Potter e la pietra filosofale", "Cinema fantastico-Avventura", "6 dicembre 2001", "2h-32m"),
        new Movie("Fast and Furious", "Giallo/Thriller", "21 settembre 2001", "1h-46m"),
        new Movie("Avengers: Endgame", "Azione/Sci-fi", "24 aprile 2019", " 3h-2m"),
        new Movie("Zoolander", "Commedia", "12 luglio 2002", "1h-29m"),
    ];

    foreach ($movieList as $movie){

        echo "<div>" . $movie -> getMovie() . "</div>";
    }

?>


</div>

</body>
<style>

    body{
        background-color: black;
        padding: 100px 0
    }
    
    .container{
        max-width: 1000px;
        margin: 0 auto;
        border: 1px solid white;
        color: white;
        padding: 50px;
        font-size: 15px;
        font-family: Arial, Helvetica, sans-serif;
        line-height: 30px;
    }

    h1{
        color: white;
        text-align: center;
    }

    .movie{
        color: red;
    }

</style>
</html>
 

