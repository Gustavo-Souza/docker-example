<?php

declare(strict_types=1);

namespace Src\Databases\MemoryDatabase\Abstraction;

interface Operation
{
  public function execute();
}
