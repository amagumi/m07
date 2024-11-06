<?php
class clsProduct
{
    private $idProduct;
    private $prodName;
    private $price;


    public function __construct($idProduct, $prodName, $price)
    {
        $this->idProduct = $idProduct;
        $this->prodName = $prodName;
        $this->price = $price;
    }



    // getters 
    public function getIdProduct()
    {
        return $this->idProduct;
    }

    public function getProdName()
    {
        return $this->prodName;
    }

    public function getPrice()
    {
        return $this->price;
    }

    // setters 

    public function setIdProduct($idProduct)
    {
        $this->idProduct = $idProduct;
    }

    public function setProdName($prodName)
    {
        $this->prodName = $prodName;
    }

    public function setPrice($price)
    {
        if ($price < 0) {
            throw new InvalidArgumentException("El precio no puede ser negativo.");
        }
        $this->price = $price;
    }
}
