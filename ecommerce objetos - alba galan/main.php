<?php

include_once("com/cart/cart.php");
include_once("com/user/users.php");
include_once("com/catalog/catalog.php");
require_once 'cart.php';
require_once 'product.php';
require_once 'catalog.php';

$catalog = new clsCatalog();
$product1 = new clsProduct(1, "aguacate", 1.50);
$catalog->addProduct($product1);
// $catalog->exportToXML('xmlDB/catalog.xml');

//echo '<a href="tienda.php">Ir a la tienda</a>';

// addToCart(10, 4);

// removeFromCart(5);

// updateCart(12, 10);

// userRegister(3, 'asier', 'chile', '123');

// getCatalog();

// productRegister(12, 'apio', 240, 0.15);

// productExists(4, 20);

// viewCart();
