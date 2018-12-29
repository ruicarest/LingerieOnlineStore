<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/products.php');
  include_once($BASE_DIR .'functions/search.php');


  if (!$_POST['search']) {
    $_SESSION['error_messages'][] = 'You didn\'t search anything';
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit;
  }
  


  $a_nome = $_POST['search'];
  $resultado = findProduct($a_nome);

 
  if (empty($resultado)) {
    $_SESSION['error_messages'][] = 'Product search doesn\'t exists';
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit;
  }

    foreach ($resultado as $key => $order) {
    unset($photo);
    if (file_exists($BASE_DIR.'images/products/'.$order['a_nome'].'.png'))
      $photo = 'images/products/'.$order['a_nome'].'.png';
    if (file_exists($BASE_DIR.'images/products/'.$order['a_nome'].'.jpg'))
      $photo = 'images/products/'.$order['a_nome'].'.jpg';
    if (!$photo) $photo = 'images/assets/default.png';
    $resultado[$key]['photo'] = $photo;
  }
  $obj = 'Search for: '.$a_nome;
  $smarty->assign('objective', $obj );
  $smarty->assign('artigos', $resultado);
  $smarty->display('products/list.tpl');

  

?>
