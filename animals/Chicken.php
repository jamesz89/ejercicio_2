<?php

class Chicken extends Animal
{
  private $timesHasEaten = 0;

  public function eat($quantity)
  {
    $this->timesHasEaten = $this->timesHasEaten + 1;
    $this->gainWeight(0);
  }

  protected function gainWeight($quantity)
  {
    $this->weight = $this->weight + ($quantity * 0);
  }
}
