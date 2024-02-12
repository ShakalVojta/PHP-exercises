<?php
class Author {
    public $name = null;
    public $albums = [];
    public $genre = null;

    public function __construct (string $name, string $genre){
        $this->name = $name;
        $this->genre = $genre;
    }   

    public function getName() : string {
        return $this->name;
    }

    public function setName(string $name) : void {
        $this->name = $name;
    }

    public function getGenre () : string {
        return $this->genre;
    }

    public function setGenre (string $genre) : void {
        $this->genre = $genre;
    }

    public function addAlbum (Album $album) : void {
        $this->albums[] = $album;
    }

    public function getAlbums () : array {
        return $this->albums;
    }

    public function getTotalTracks() : int {
        $totalTracks = 0;
        foreach ($this->albums as $album) {
            $totalTracks += $album->getNumberOfTracks();
        }
        return $totalTracks;
    }
}



?>