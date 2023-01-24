<?php

// definire classe movie
class Movie {

    // dichiarazione variabili di istanza
    public $title;
    public $genre;
    public $year;

    // definito il costruttore
    public function __construct($title, $genre, $year) {

        $this -> title = $title;
        $this -> genre = $genre;
        $this -> year = $year;
    }
}

echo "<h1> MOVIE LIST </h1>";

$movie1 = new Movie("Ritorno al futuro", "Fantascienza", "18 ottobre 1985");
$movie2 = new Movie("Harry Potter e la pietra filosofale", "Fantascienza", "6 dicembre 2001");

// var_dump($movie1);

echo "MOVIE: " . $movie1 -> title 
    . " / " . $movie1 -> genre
    . " / " . $movie1 -> year;
    
echo "<br>";

echo "MOVIE: " . $movie2 -> title 
    . " / " . $movie2 -> genre
    . " / " . $movie2 -> year;

