<?php
require('intax.php');

$price = 200;
$price_tax = intax($price);
echo $price_tax;

?>