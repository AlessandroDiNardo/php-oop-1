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
