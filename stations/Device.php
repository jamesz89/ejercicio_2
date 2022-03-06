<?php

abstract class Device
{
  abstract protected function needsReloading();

  abstract public function reload();
}
