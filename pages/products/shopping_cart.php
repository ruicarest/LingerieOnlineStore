<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/products.php');

  $shopping_cart = $_SESSION['shopping_cart'];

  if (is_array($shopping_cart))

  foreach($shopping_cart as $key => $quantity) {
    $artigo = getProduct($key);
    $artigo['quantity'] = $quantity;
    $artigos[$key] = $artigo;    

    if (file_exists($BASE_DIR.'images/products/'.$artigo['a_nome'].'.png'))
      $photo = 'images/products/'.$artigo['a_id'].'.png';
    if (file_exists($BASE_DIR.'images/products/'.$artigo['a_nome'].'.jpg'))
      $photo = 'images/products/'.$artigo['a_nome'].'.jpg';
    if (!$photo) $photo = 'images/assets/default.png';
    $artigos[$key]['photo'] = $photo;
    unset($photo);
  }
  
  if (empty($shopping_cart)) {
    $_SESSION['error_messages'][] = 'Shopping-Cart is empty :(';
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit;
  }

  $smarty->assign('objective', cart );
  $smarty->assign('artigos', $artigos);
  $smarty->display('products/list.tpl');
?>
