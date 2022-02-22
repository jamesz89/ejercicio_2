<?php

abstract class Station
{
  protected $needsReload = false;

  abstract function reload();
}