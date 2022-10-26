<?php
require_once 'person.php';
class gafanhoto extends person {
//atributes
  private $login;
  private $totWatched;

//methods 
public function watchOneMore() {
  $this->totWatched ++;
}


public function __construct($name, $age, $sex, $login) {
  parent ::__construct($name, $age, $sex);
  $this->login = $login;
  $this->totWatched = 0;
}

  public function getTotWatched() {
    return $this->totWatched;
  }
  public function setTotWatched($totWatched) {
    $this->totWatched = $totWatched;
    return $this;
  }
  public function getLogin() {
    return $this->login;
  }
  public function setLogin($login) {
    $this->login = $login;
    return $this;
  }
}