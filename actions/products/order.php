<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/products.php');

  $shopping_cart = $_SESSION['shopping_cart'];
  $username = $_SESSION['username'];
  foreach($shopping_cart as $key => $quantity) {
  	$artigo = getProduct($key);
    $artigo['quantity'] = $quantity;
    $artigos[$key] = $artigo; 

    $newStock = $artigo['a_stock'] - $quantity;

    placeOrder($artigo['a_nome'], $username, $quantity);

    removeStock($newStock, $artigo['a_nome']);
  }
  
  unset($_SESSION['shopping_cart']);
  
  $_SESSION['success_messages'][] = 'Products ordered';
  
  header('Location: '. $BASE_URL . 'pages/products/list_all.php');
?>
