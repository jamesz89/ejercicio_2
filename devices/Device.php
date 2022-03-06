<?php

abstract class Device
{
  abstract protected function needsReloading();

  abstract public function reload();

  abstract protected function canServe(Animal $animal);

  abstract protected function doFunction(Animal $animal);
}
