<?php

declare(strict_types=1);

namespace Src\Databases\MemoryDatabase;

use Exception;
use Src\Databases\MemoryDatabase\GetOperation;
use Src\Databases\MemoryDatabase\SetOperation;

class MemoryQuery
{
  private $database_reference = null;

  private $field = "";
  private $value = null;

  function __construct(&$database_reference)
  {
    $this->database_reference = &$database_reference;
  }

  protected function getFieldName(): string
  {
    return $this->field;
  }

  protected function getValueObject()
  {
    return $this->value;
  }

  public function onField(string $name): MemoryQuery
  {
    if (strlen($this->field) == 0) {
      $this->field = $name;
    } else {
      $this->field .= "/$name";
    }

    return $this;
  }

  public function setValue($value): SetOperation
  {
    $this->value = $value;

    return new SetOperation($this->database_reference, $this->field, $value);
  }

  public function getValue(): GetOperation
  {
    return new GetOperation($this->database_reference, $this->field);
  }
}
