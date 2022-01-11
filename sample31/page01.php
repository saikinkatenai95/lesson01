<?php
require('intax.php');

$price = 1;
$price_tax = intax($price);
echo $price_tax;

?>