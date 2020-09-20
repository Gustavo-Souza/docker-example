<?php

declare(strict_types=1);

namespace Src\Entity;

class BookSource
{

  private $id;
  private $url;

  function __construct(string $url)
  {
    $this->url = $url;
  }

  public function getid()
  {
    return $this->id;
  }

  public function getUrl()
  {
    return $this->url;
  }
}
