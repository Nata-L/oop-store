<?php

namespace OOPStore;

interface CartInterface 
{
    public function addProduct(Product $product): bool;
    public function removeProduct(Product $product): bool;
    public function getTotal();
    public function createPurchase();
}
