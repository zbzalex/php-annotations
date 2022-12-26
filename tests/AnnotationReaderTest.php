<?php

namespace Tests;

use Annotations\AnnotationReader;
use PHPUnit\Framework\TestCase;

class ApplicationTest extends TestCase
{
  public function test1()
  {
    $reader = new AnnotationReader(\Tests\Model::class);
    $reader->parse();

    var_dump($reader->getAnnotations());
  }
}
