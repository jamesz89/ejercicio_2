<?php

class Cow extends Mammal
{

  public function eat($amount)
  {
    $this->gainWeight($amount);
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

  public function gainWeight($amount)
  {
    $this->weight = $this->weight + ($amount / 3);
  }

  private function loseWeight($amount)
  {
    $this->weight = $this->weight - $amount;
    if ($this->weight < 200000) {
      $this->makeHungry();
    }
  }
}
