<?php

require_once '../vendor/autoload.php';



$loader = new Twig\Loader\FilesystemLoader('../src/View');
$twig = new Twig\Environment($loader);
$products = ['product1', 'product2', 'product3', 'product4', 'product5'];
$users = ['Ju', 'Alex', 'Martin'];

echo $twig->render('index.html.twig', [
    'products'=>$products,
    'user'=>$users
    ]);
