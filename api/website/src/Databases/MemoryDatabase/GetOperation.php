<?php

declare(strict_types=1);

namespace Src\Databases\MemoryDatabase;

use Src\Databases\MemoryDatabase\Abstraction\Operation;

class GetOperation implements Operation
{
  private $database_reference = null;
  private $fieldName = null;

  function __construct(&$database_reference, string $fieldName)
  {
    $this->database_reference = &$database_reference;
    $this->fieldName = $fieldName;
  }

  public function execute()
  {
    return $this->database_reference[$this->fieldName];
  }
}
