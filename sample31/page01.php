<?php
require('intax.php');

$price = 120;
$price_tax = intax($price);
echo $price_tax;

?>