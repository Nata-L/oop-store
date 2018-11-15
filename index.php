<?php

namespace OOPStore;

// define('CLASSES_DIR', __DIR__ . DIRECTORY_SEPARATOR .'classes');
// define('INTERFACES_DIR', __DIR__ . DIRECTORY_SEPARATOR .'interfaces');

// require_once(CLASSES_DIR . '/Category.php')
//// http://php.net/manual/en/function.dir.php 

spl_autoload_register(function ($class) {
    // var_dump($class);
    $classFilename = __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR
        . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';

        require $classFilename;
});


$category = new Category('TV');
print_r($category->getName());
$product1 = new Product($category, 'LG LX32', 10000);
// $product2 = new Product($category, 'LG LX32', 10000);

// $store = new Store();

// $store->addProduct($product1);
// $store->addProduct($product1);
// $store->addProduct($product2);
// $store->removeProduct($product1);
// print_r($store->getProducts());

// $customer = new Customer('', '');
// $cart = new \OOPStore\Cart($customer);
// $cart->addProduct($product);
// $cart->addProduct($product);

// echo "Total:";
// var_dump($cart->getTotal());

// $purchase = $cart->createPurchase();
// $cart->addProduct($product);
// var_dump($cart->getTotal());
