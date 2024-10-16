<?php

// la funcion productExists abre el archivo xml de los productos 
// y recorre cada nodo buscando el producto deseado (bucle) 


function productExists($idProd, $qty)
{
    $catalog = 'xmlDB/catalog.xml';

    // carga el archivo catalog.xml
    $productFinder = simplexml_load_file($catalog);

    // verifica si hay al menos un producto
    if (count($productFinder->product) > 0) {
        foreach ($productFinder->product as $product) {
            // echo $product->prodName . " = " . $product->qty . " ud." . "<br>";
            if ($idProd == $product->idProd) {

                if ($qty < $product->qty) {

                    return true; // el producto existe y hay stock

                }
            }
        }
    }

    return false; // no hay productos en el catalogo / no existe el id / no existe la cantidad
}



function getCatalog()
{

    $file = 'xmlDB/catalog.xml';

    if (file_exists($file)) {
        echo "hola";
        $catalog = simplexml_load_file($file);
    } else {
        echo "adios";
        $catalog = new SimpleXMLElement('<catalog></catalog>');
    }

    return $catalog;
}



function productRegister($idProd, $prodName, $qty, $price)
{

    echo "product register <br>";
    echo $idProd;
    echo $prodName;
    echo $qty;
    echo $price;

    $catalog = getCatalog();

    $product = $catalog->addChild('product');
    $product->addAttribute("id", "1");
    $product->addChild('idProd', $idProd);
    $product->addChild('prodName', $prodName);
    $product->addChild('qty', $qty);
    $product->addChild('price', $price);

    $prodCurrency = $product->addChild('prodCurrency');
    $prodCurrency->addChild('currency', 'EU');

    $catalog->asXML('xmlDB/catalog.xml');

    echo $catalog;
}
