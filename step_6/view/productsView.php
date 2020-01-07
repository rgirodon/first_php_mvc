<?php 
$title = 'Products'; 
?>

<?php 
ob_start(); 
?>

<h1>Products</h1>

<ul>        

<?php
foreach ($products as $product) {
?>

    <li>
    <?php echo $product['id']; ?> - <?php echo $product['name']; ?> [<?php echo $product['category']; ?>] - <?php echo $product['price']; ?> 
    </li>

<?php
}
?>

</ul>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>