<?php

abstract class Device
{
  abstract protected function needsReloading();

  abstract function reload();
}
