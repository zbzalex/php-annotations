<?php

namespace Tests;

/**
 * @Dao
 * @Entity()
 * @InlineAnnotation("hello")
 * @InlineAnnotationWithNamedParams(param1 = "value1", param2 = "value2")
 * @MultilineAnnotation(
 * param1 = "hello"
 * )
 */
class Model
{
  // body
}