<?php 
class Album {
    private $title;
    private $numberOfTracks;


    public function __construct(string $title, int $numberOfTracks) {
        $this->title = $title;
        $this->numberOfTracks = $numberOfTracks;
    }

    public function getNumberOfTracks() : int{
        return $this->numberOfTracks;
}
}