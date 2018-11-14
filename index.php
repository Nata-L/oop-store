<?php

namespace OOPStore;

define('CLASSES_DIR', __DIR__ . DIRECTORY_SEPARATOR .'classes');
define('INTERFACES_DIR', __DIR__ . DIRECTORY_SEPARATOR .'interfaces');

// require_once(CLASSES_DIR . '/Category.php')
//// http://php.net/manual/en/function.dir.php 

function requireDir($dir)
{
    $d = dir($dir);
}

$d = dir(INTERFACES_DIR);
while(false !== ($classFile = $d->read())) {
    if($classFile === '.' || $classFile === '..') {
        continue;
    }
    require_once(INTERFACES_DIR . DIRECTORY_SEPARATOR . $classFile);
}

requireDir(INTERFACES_DIR);
requireDir(CLASSES_DIR);

$category = new Category('TV');

$product1 = new Product($category, 'LG LX32', 10000);
$product2 = new Product($category, 'LG LX32', 10000);

$store = new Store();

$store->addProduct($product1);
$store->addProduct($product1);
$store->addProduct($product2);
$store->removeProduct($product1);
print_r($store->getProducts());

// $customer = new Customer('', '');
// $cart = new \OOPStore\Cart($customer);
// $cart->addProduct($product);
// $cart->addProduct($product);

// echo "Total:";
// var_dump($cart->getTotal());

// $purchase = $cart->createPurchase();
// $cart->addProduct($product);
// var_dump($cart->getTotal());





