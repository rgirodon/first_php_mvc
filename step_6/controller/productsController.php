<?php
require '../inc/autoload.php';
require '../inc/constants.php';

use \FirstMvc\Model\ProductsManager as ProductsManager;

$productsManager = new ProductsManager();

$products = $productsManager->getProducts();

require '../view/productsView.php';