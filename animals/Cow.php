<?php

include_once("Animal.php");
class Cow extends Animal
{

  public function __construct($weight)
  {
    Animal::__construct($weight);
    $this->weight > 200000 ? $this->hunger = false : $this->hunger = true;
  }

  public function eat($quantity)
  {
    $this->gainWeight($quantity);
    $this->makeThristy();
  }

  public function drink()
  {
    $this->satisfyThrist();
    $this->loseWeight(500);
  }

  public function walk()
  {
    $this->loseWeight(3000);
  }

  protected function gainWeight($quantity)
  {
    $this->weight = $this->weight + ($quantity / 3);
  }

  private function loseWeight($quantity)
  {
    $this->weight = $this->weight - $quantity;
    if ($this->weight < 200000) {
      $this->makeHungry();
    }
  }
}
