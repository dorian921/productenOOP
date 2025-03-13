<?php

require_once "classes\classes.php";

class Game extends Product {
  private string $genre;
  private array $requirements;

  public function __construct($name, $purchasePrice, $tax, $profit, $description) {
    parent::__construct($name, $purchasePrice, $tax, $profit, $description);
    $this->setCategory();
  }
  public function setGenre($genre) {
    $this->genre = $genre;


  }
  public function addRequirements($requirement) {
    $this->requirements[] = $requirement;
  }
  public function getInfo(): array {
    return[ $this->genre, $this->requirements];
  }
  public function setCategory() {
     $this->category = "games";
  }
}