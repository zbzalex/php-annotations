<?php

namespace phpenhance\Annotations;

use Util\IteratorImpl;

class Annotation
{
  private $name;
  private $parameters;

  public function __construct($name, array $parameters = [])
  {
    $this->name = $name;  
    $this->parameters = $parameters;
  }

  public function getName() {
    return $this->name;
  }

  public function getParameters()
  {
    return $this->parameters;
  }

  public function getParameter($pname)
  {
    $it = new IteratorImpl(array_keys($this->parameters));
    while ($it->hasNext()) {
      $p = $it->next();
      if ($p == $pname) {
        return $this->parameters[$p];
      }
    }

    return null;
  }
}