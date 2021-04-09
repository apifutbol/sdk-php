<?php

namespace APIFutbolAPI\Request;

use APIFutbolAPI\APIFutbol;

/**
 * Base Class
 */
class RequestCollection
{
  /** @var APIFutbol */
  public $apifutbol;

  /**
   * Constructor.
   *
   * @param APIFutbol $parent
   */
  public function __construct(
    $parent
  ) {
    $this->apifutbol = $parent;
  }
}
