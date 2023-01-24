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

       return "<strong> MOVIE: </strong>" . $this -> title 
       . " / " . $this -> genre
       . " / " . $this -> year
       . " / " . $this -> duration
       . "<br>" . "<br>";
    }
}

echo "<h1> MOVIE LIST </h1>";

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


 

