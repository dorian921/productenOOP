<?php
require_once "classes\classes.php";
require_once "classes\music.php";
require_once "classes\game.php";
require_once "classes\movie.php";
require_once "productlist.php";

$music1 = new  Music("master of puppets", 55,2.50,5 , "metal");
$music1->setArtist("metallica");
$music1->addNumber("battery");
$music1->addNumber("thing that should not be");


$music2 = new  Music("chelsea smile", 10,2.50,5 , "metal");
$music2->setArtist("bring me the horizon");
$music2->addNumber("the comedown");
$music2->addNumber("chelsea smile");

$game1 = new Game("metal gear solid 2", 25.00,5.25, 10.00, "rgrg");
$game1->setGenre("stealth game");
$game1->addRequirements("geforce GTX 980");
$game1->addRequirements("intel i5-7600");
$game1->addRequirements("16 gb RAM");


$movie1 = new Movie("titanic", 20.50,10,7,"grgr");
$movie1->setQuality("dvd");

$movie2 = new Movie("belle en het beest", 20.50,10,7,"grgr");
$movie2->setQuality("bluray");

$list1 = new productlist();
$list1->addProduct($music1);
$list1->addProduct($music2);
$list1->addProduct($game1);
$list1->addProduct($movie1);
$list1->addProduct($movie2);

print "<table border=1>
 <tr>
   <th>category</th>
   <th>producten</th>
   <th>prijs</th>
   <th>info</th>
 </tr>";

 foreach($list1->getProducts() as $product)

 print "<tr>
   <td>".$product->getCategory()."</td>
   <td>".$product->getName()."</td>
   <td>".$product->getSalesPrice()."</td>
   <td>".$product->printInfo()."</td>
 </tr>";


print "</table>";


