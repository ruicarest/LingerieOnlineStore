<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/products.php');

  if (!$_SESSION['username']) {
    $_SESSION['error_messages'][] = 'You need to login first';
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
  }

  $smarty->assign('SECTION', 'orders');

  $username = $_SESSION['username'];

  $orders = getOrders($username);  

  foreach ($orders as $key => $order) {
    unset($photo);
    if (file_exists($BASE_DIR.'images/products/'.$order['a_nome'].'.png'))
      $photo = 'images/products/'.$order['a_nome'].'.png';
    if (file_exists($BASE_DIR.'images/products/'.$order['a_nome'].'.jpg'))
      $photo = 'images/products/'.$order['a_nome'].'.jpg';
    if (!$photo) $photo = 'images/assets/default.png';
    $orders[$key]['photo'] = $photo;
  }

  $obj = 'My Orders';
  $smarty->assign('objective', $obj );
  $smarty->assign('artigos', $orders);
  $smarty->display('products/list.tpl');
?>