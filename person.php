<?php
abstract class person {
//atributes
  protected $name;
  protected $age;
  protected $sex;
  protected $experience;

//methods 

protected function gainExp($n) {
  $this->experience += $n;
}

public function __construct($name, $age, $sex) {
    $this->name = $name;
    $this->age = $age;
    $this->sex = $sex;
    $this->experience = 0;
}

  public function getName() {
    return $this->name;
  }
  public function setName($name) {
    $this->name = $name;
    return $this;
  }
  public function getAge() {
    return $this->age;
  }
  public function setAge($age) {
    $this->age = $age;
    return $this;
  } 
  public function getSex() {
    return $this->sex;
  }
  public function setSex($sex) {
    $this->sex = $sex;
    return $this;
  }
  public function getExperience() {
    return $this->experience;
  }
  public function setExperience($experience) {
    $this->experience = $experience;
    return $this;
  }
}