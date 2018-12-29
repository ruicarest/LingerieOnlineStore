<?php
function findProduct($wanted){
$i=0;

$allProducts = getAllProducts();
foreach ($allProducts as $key => $products) {

	if(strpos($products['a_nome'], $wanted) !== false) {
		$found[$i] = $products;
		$i++;
  		}
  	
	}
return $found;

}

?>