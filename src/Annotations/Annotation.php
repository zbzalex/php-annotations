<?php

namespace Annotations;

class Annotation
{
  private $name;
  private $params;

  public function __construct($name, array $params = [])
  {
    $this->name = $name;  
    $this->params = $params;
  }

  public function getName() {
    return $this->name;
  }

  public function getParams()
  {
    return $this->params;
  }
}