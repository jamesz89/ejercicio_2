<?php

abstract class Device
{
  abstract protected function needsReloading();

  abstract public function reload();

  abstract public function canServe(Animal $animal);

  abstract public function doFunction(Animal $animal);
}
