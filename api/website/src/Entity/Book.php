<?php

declare(strict_types=1);

namespace Src\Entity;

class Book
{
  private $uuid;
  private $id;
  private $name;
  private $author;
  private $price;

  function __construct(string $uuid = null, string $id, string $name, string $author, float $price)
  {
    $this->uuid = $uuid;
    $this->id = $id;
    $this->name = $name;
    $this->author = $author;
    $this->price = $price;
  }

  public function getUUID(): string
  {
    return $this->uuid;
  }

  public function getId(): string
  {
    return $this->id;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function getAuthor(): string
  {
    return $this->author;
  }

  public function getPrice(): float
  {
    return $this->price;
  }
}
