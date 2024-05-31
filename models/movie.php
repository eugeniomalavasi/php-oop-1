<?php
// creazione class Movie public
// class Movie {
//     public string $name;
//     public string $description;
//     public string $director;
//     public int $year;
// }

// creazione class Movie private
class Movie {
    private string $name;
    private string $description;
    private string $director;
    private int $year;
    
    
    public function setMovieName(string $index_name) {
        if (strlen($index_name) > 0) {
            $this->name = $index_name;
        } else {
            $this->name = "Nessun titolo presente";
        }
    }

    public function getMovieName() {
        return $this->name;
    }

    public function setMovieDesc(string $index_desc) {
        if (strlen($index_desc) > 0) {
            $this->description = $index_desc;
        } else {
            $this->description = "Nessuna descrizione presente";
        }
    }

    public function getMovieDesc() {
        return $this->description;
    }

    public function setMovieDir(string $index_director) {
        if (strlen($index_director) > 0) {
            $this->director = $index_director;
        } else {
            $this->director = "Nessun regista presente";
        }
    }

    public function getMovieDir() {
        return $this->director;
    }

    public function setMovieYear(string $index_year) {
        if (strlen($index_year) > 0) {
            $this->year = $index_year;
        } else {
            $this->year = "Nessun anno presente";
        }
    }

    public function getMovieYear() {
        return $this->year;
    }
}
