<?php
require_once "classes\classes.php";

class productlist
{
  private $name;
  private $items = [];

  public function  addProduct($product)
  {
    $this->items[] = $product;
  }

  public function getProducts()
  {
    return $this->items;
  }

}