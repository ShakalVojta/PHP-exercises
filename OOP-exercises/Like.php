<?php 
class Like {
    private $user;
    private $audioTrack;

    public function __construct (User $user, AudioTrack $audioTrack) {
        $this->user = $user;
        $this->audioTrack = $audioTrack;
    }

    public function getUser() {
        return $this->user;
    }

    public function getAudioTrack() {
        return $this->audioTrack;
    }
}