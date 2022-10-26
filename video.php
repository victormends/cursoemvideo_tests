<?php
require_once 'videoactions.php';
class video implements videoactions {
//atributes
  private $title;
  private $rating;
  private $views;
  private $likes;
  private $playing;

//methods 

public function play() {

}
public function pause() {

}
public function like() {

}

  public function __construct($title) {
    $this->title = $title;
    $this->rating = 1;
    $this->views = 0;
    $this->likes = 0;
    $this->playing = false;
  }

  public function getTitle() {
    return $this->title;
  }
  public function setTitle($title) {
    $this->title = $title;
    return $this;
  }
  public function getRating() {
    return $this->rating;
  }
  public function setRating($rating) {
    $mean = ($this->rating + $rating)/$this->views;
    $this->rating = $rating;
    return $this;
  }
  public function getViews() {
    return $this->views;
  }
  public function setViews($views) {
    $this->views = $views;
    return $this;
  }
  public function getLikes() {
    return $this->likes;
  }
  public function setLikes($likes) {
    $this->likes = $likes;
    return $this;
  } 
  public function getPlaying() {
    return $this->playing;
  }
  public function setPlaying($playing) {
    $this->playing = $playing;
    return $this;
  }
}