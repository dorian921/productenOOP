<?php


abstract class Product {
    private string $name;
    private float $purchasePrice;
    private int $tax;
    private string $description;
    private float $profit;
    protected string $category;

    public function __construct($name, $purchasePrice, $tax, $profit, $description) {
        $this->name = $name;
        $this->purchasePrice = $purchasePrice;
        $this->tax = $tax;
        $this->profit = $profit;
        $this->description = $description;




    }
    public function getName(): string {
      return  $this->name;
    }
    public function getCategory(): string {
     return $this->category;

    }
    public function getSalesPrice(): float {
      return $this->purchasePrice + $this->profit + ($this->purchasePrice * $this->tax / 100);

    }
    public function printInfo(): string {

      $print = "<ul>";
      foreach ($this->getInfo() as  $item) 
      {
        if(is_array($item))
        {
          $print .= "<li>extra info<ul>";
          foreach($item as $subitem)
          {
            $print.= "<li>$subitem</li>";
          }
          $print .= "</ul> </li>";
        }else
          {
            $print .= "<li>$item</li>";  
        }
      }
      $print .= "</ul>";
      return $print;



    }
    abstract public function getInfo(): array ;
   abstract public function setCategory();
}





 