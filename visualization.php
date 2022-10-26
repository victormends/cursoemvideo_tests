<?php
require_once 'video.php';
require_once 'gafanhoto.php';

class visualization {
//atributes
  private $spectator;
  private $movie;

//methods 
public function evaluate() {
  $this->movie->setRating(5);
}
public function evaluateRating($rating) {
    $this->movie->setRating($rating);
}
public function evaluatePercent($percent) {
    $this->movie->setRating($percent);
}

//special methods
public function __construct($spectator, $movie) {
    $this->spectator = $spectator;
    $this->movie = $movie;
    $this->movie->setViews($this->movie->getViews() +1);
    $this->spectator->setTotWatched($this->spectator->getTotWatched() +1);
}

  public function getSpectator() {
    return $this->spectator;
  }
  public function setSpectator($spectator) {
    $this->spectator = $spectator;
    return $this;
  }
  public function getMovie() {
    return $this->movie;
  }
  public function setMovie($movie) {
    $this->movie = $movie;
    return $this;
  }
}