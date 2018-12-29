<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/products.php');
  include_once($BASE_DIR .'database/users.php');
  include_once($BASE_DIR .'database/estatistica.php');

  $range = $_GET[range];  

  switch($range)
  {
    case 1:
      $price1 = 0;
      $price2 = 20;
      break;

    case 2:
      $price1 = 20;
      $price2 = 49;
      break;

    case 3:
      $price1 = 49;
      $price2 = 1000;
      break;

}

  $artigos = getProductsByPrice($price1, $price2);  

  if (empty($artigos)) {
    $_SESSION['error_messages'][] = 'No Products Found!';
    header("Location: $BASE_URL");
    exit;
  }

  $smarty->assign('SECTION', 'products');

  foreach ($artigos as $key => $artigo) {
    unset($photo);
    if (file_exists($BASE_DIR.'images/products/'.$artigo['a_nome'].'.png'))
      $photo = 'images/products/'.$artigo['a_nome'].'.png';
    if (file_exists($BASE_DIR.'images/products/'.$artigo['a_nome'].'.jpg'))
      $photo = 'images/products/'.$artigo['a_nome'].'.jpg';
    if (!$photo) $photo = 'images/assets/default.png';
    $artigos[$key]['photo'] = $photo;
  }

  //TOTAL USERS
  $totalusers = totalUsers();
  $smarty->assign('totalusers', $totalusers['count']);

 //TOTAL ENCOMENDAS
  $totalbuys = totalEncomendas();
  $smarty->assign('totalbuys', $totalbuys['sum']);

 //TOTAL GANHO 
  $totals = totalEarned();
  foreach ($totals as $key => $total) {
      $profit=($total['a_preco'] * $total['sum']) + $profit;
  }
  $smarty->assign('totalprofit', $profit);

  //PARA ORGANIZAR A LISTA
  $number = countProducts();
  $helper = $number['count']%12; 
 if ($helper==2){
  $smarty->assign('resto', (($number['count']-$helper)/12));
  }else{
$smarty->assign('resto', (($number['count']-$helper)/12)+1);
  }








  $smarty->assign('price1', $price1);
  $smarty->assign('price2', $price2);

  $smarty->assign('artigos', $artigos);
  $smarty->display('products/list.tpl');
?>
