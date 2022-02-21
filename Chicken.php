<?php

class Chicken extends Animal
{
  private $timesHasEaten = 0;

  public function eat($quantity)
  {
    $this->timesHasEaten = $this->timesHasEaten + 1;
    $this->gainWeight(0);
  }

  public function gainWeight($amount)
  {
    $this->weight = $this->weight + ($amount * 0);
  }

}