<?php
// 税込金額を返す
function intax($value){
  return ceil($value * 1.1);
}

$price = 200;
$price_tax = intax($price);
echo $price_tax;
?>