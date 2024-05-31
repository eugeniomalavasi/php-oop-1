<?php
require_once 'models/movie.php';
require_once 'models/genre.php';

// dichiarazione istanza 
// $movie = new Movie();
// valorizzazione attributi istanza public
// $movie -> name = "Lord Of The rings";
// $movie -> description = "Best film ever made in the history of the entire human kind";
// $movie -> director = "Peter Jackson";
// $movie -> year = 2001;

// var_dump($movie);

$movie = new Movie("Peter Jackson", 2001);

$movie->setMovieName("Lord Of The rings");
$movie->setMovieDesc("Best film ever made in the history of the entire human kind");
echo $movie->getMovieName() . '<br>' . $movie->getMovieDesc() ;
