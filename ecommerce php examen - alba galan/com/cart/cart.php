<?php

//functions add to cart
////////////////////////////////////////////////////////////////////////

function addToCart($idProd, $qty)
{

    if (productExists($idProd, $qty)) {
        _executeAddToCart($idProd, $qty);
        echo "added to cart <br>";
    } else {
        echo 'no hay producto o no hay stock';
    }
}

// escribe los nodos en el archivo xml del carrito
function _executeAddToCart($idProd, $qty)
{

    $cart = getCart();

    $item = $cart->addChild('productItem');
    //addattribute()
    $item->addChild('idProd', $idProd);
    $item->addChild('qty', $qty);

    //escritura de nodos en un archivo xml
    $cart->asXML('xmlDB/cart.xml');
}


// crea el archivo xml cart
function getCart()
{

    $file = 'xmlDB/cart.xml';

    // Load existing connections or create a new XML document
    if (file_exists($file)) {
        $cart = simplexml_load_file($file);
    } else {
        $cart = new SimpleXMLElement('<cart></cart>');
    }

    return $cart;
}

//functions remove from cart
////////////////////////////////////////////////////////////////////////


// {

//     $cart = 'xmlDB/cart.xml';

//     $productFinder = simplexml_load_file($cart);

//     if (count($productFinder->productItem) > 0) {
//         echo 'entra' . "<br>";
//         // esta en el carrito
//         foreach ($productFinder->productItem as $productItem) {
//             echo 'bucle' . "<br>";
//             if ($idProd == $productItem->idProd) {
//                 echo 'encontrado' . "<br>";
//                 unset($productItem);
//             }
//         }
//         echo 'gsdf';
//     } else {
//         //no hay productos en el carrito
//     }
// }



function removeFromCart($idProd)
{

    $xml = simplexml_load_file('xmlDB/cart.xml');
    echo 'hola1' . "<br>";

    foreach ($xml->xpath("/cart/productItem[id='1']") as $idProd) {
        echo 'encontrado' . "<br>";
        unset($idProd[0]);
    }

    $xml->asXML('xmlDB/cart.xml');
}
