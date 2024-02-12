<?php

class AudioTrack {
    private $artist;
    private $title;
    private $duration;

    public function __construct (string $artist, string $title, int $duration) {
        $this->artist = $artist;
        $this->title = $title;
        $this->duration = $duration;
    }

    public function getTitle () {
        return $this->title;
    }

    public function getArtist () {
        return $this->artist;
    }

    public function getDuration () {
        return $this->duration;
    }
}