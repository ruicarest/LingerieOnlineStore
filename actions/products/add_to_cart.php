<?php
  include_once('../../config/init.php');
  
  $a_id = $_GET['id'];
  
  $_SESSION['shopping_cart'][$a_id]++;
  $_SESSION['success_messages'][] = 'Added to cart';
  
  header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
