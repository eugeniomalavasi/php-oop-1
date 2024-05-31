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

// MOVIE 1 PRIVATE
$movie = new Movie();

$movie->setMovieName("Lord Of The rings");
$movie->setMovieDesc("Best film ever made in the history of the entire human kind");
$movie->setMovieDir("Peter Jackson");
$movie->setMovieYear(2001);
echo $movie->getMovieName() . '<br>' . $movie->getMovieDesc() .'<br>'. $movie->getMovieDir() .'<br>'. $movie->getMovieYear() . '<br>' . '<br>';

// MOVIE 2 PRIVATE
$movie_two = new Movie();

$movie->setMovieName("Moon");
$movie->setMovieDesc("Sam Bell è prossimo alla conclusione di un contratto di lavoro della durata di tre anni come unico residente della base mineraria lunare Sarang della Lunar Industries. Il suo compito è sovrintendere al funzionamento degli estrattori automatici, che estraggono elio-3 dalla superficie lunare");
$movie->setMovieDir("Duncan Jones");
$movie->setMovieYear(2009);
echo $movie->getMovieName() . '<br>' . $movie->getMovieDesc() .'<br>'. $movie->getMovieDir() .'<br>'. $movie->getMovieYear();
