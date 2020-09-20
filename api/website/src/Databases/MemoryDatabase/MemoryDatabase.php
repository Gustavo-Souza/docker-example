<?php

declare(strict_types=1);

namespace Src\Databases\MemoryDatabase;

use Src\Databases\MemoryDatabase\MemoryQuery;

/**
 * A memory database that immitates the NoSQL database.
 */
class MemoryDatabase
{
  private $name;
  private $database = null;

  private $query = null;

  function __construct(string $name)
  {
    $this->name = $name;
    $this->init();
  }

  function init()
  {
    $this->database = array();
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function getRawData(): array
  {
    return $this->database;
  }

  public function query(): MemoryQuery
  {
    $query = new MemoryQuery($this->database);

    $this->query = $query;
    return $query;
  }
}
