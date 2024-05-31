<?php
class Genre {
    private string $genre;

    public function setGenre(string $index_genre) {
        if (strlen($index_genre) > 0) {
            $this->genre = $index_genre;
        }
    }

    public function getGenre() {
        return $this->genre;
    }
};