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

// MOVIE PRIVATE
$movie = new Movie();

// RECALLING SETTER FUNCTIONS MOVIE
$movie->setMovieName("Lord Of The rings");
$movie->setMovieDesc("Best film ever made in the history of the entire human kind");
$movie->setMovieDir("Peter Jackson");
$movie->setMovieYear(2001);

// SET GENRE 1 PRIVATE
$genre = new Genre ();

// RECALLING SETTER FUNCTIONS GENRE
$genre->setGenre("MASTERPIECE");

// OUTPUT
echo $movie->getMovieName() . '<br>' . $movie->getMovieDesc() .'<br>'. $movie->getMovieDir() .'<br>'. $movie->getMovieYear() . '<br>' . $genre->getGenre() . '<br>' . '<br>';

// ---------------------------------------------

// MOVIE 2 PRIVATE
$movie_two = new Movie();

// SET GENRE 2 PRIVATE
$genre_two = new Genre();

// RECALLING SETTER FUNCTIONS MOVIE
$movie->setMovieName("Moon");
$movie->setMovieDesc("Sam Bell è prossimo alla conclusione di un contratto di lavoro della durata di tre anni come unico residente della base mineraria lunare Sarang.");
$movie->setMovieDir("Duncan Jones");
$movie->setMovieYear(2009);

// RECALLING SETTER FUNCTIONS GENRE
$genre_two->setGenre("Fantascienza");

// OUTPUT
echo $movie->getMovieName() . '<br>' . $movie->getMovieDesc() .'<br>'. $movie->getMovieDir() .'<br>'. $movie->getMovieYear() . '<br>' . $genre_two->getGenre() . '<br>' . '<br>';
