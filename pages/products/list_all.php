<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/products.php');
  include_once($BASE_DIR .'database/users.php');
  include_once($BASE_DIR .'database/estatistica.php');


  $artigos = getAllProducts();  
  $username = $_SESSION['username'];
  

  $smarty->assign('SECTION', 'products');

  foreach ($artigos as $key => $artigo) {
    unset($photo);
    if (file_exists($BASE_DIR.'images/products/'.$artigo['a_nome'].'.png'))
      $photo = 'images/products/'.$artigo['a_nome'].'.png';
    if (file_exists($BASE_DIR.'images/products/'.$artigo['photo']))
      $photo = 'images/products/'.$artigo['photo'];
    if (file_exists($BASE_DIR.'images/products/'.$artigo['a_nome'].'.jpg'))
      $photo = 'images/products/'.$artigo['a_nome'].'.jpg';
    if (!$photo) $photo = 'images/assets/default.png';
    $artigos[$key]['photo'] = $photo;
  }
  $smarty->assign('artigos', $artigos);

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
 if ($helper!=0){
  $smarty->assign('resto', (($number['count']-$helper)/12)+1);
  }else{
$smarty->assign('resto', (($number['count']-$helper)/12));
  }


  

  $smarty->assign('objective', Products);
  $smarty->display('products/list.tpl');
?>
