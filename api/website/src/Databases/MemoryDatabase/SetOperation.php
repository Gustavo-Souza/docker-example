<?php

declare(strict_types=1);

namespace Src\Databases\MemoryDatabase;

use Src\Databases\MemoryDatabase\MemoryQuery;
use Src\Databases\MemoryDatabase\Abstraction\Operation;

class SetOperation implements Operation
{
  private $database_reference = null;
  private $fieldName = null;
  private $value = null;

  function __construct(&$database_reference, string $fieldName, $value)
  {
    $this->database_reference = &$database_reference;
    $this->fieldName = $fieldName;
    $this->value = $value;
  }

  public function execute()
  {
    $this->database_reference[$this->fieldName] = $this->value;
  }
}
