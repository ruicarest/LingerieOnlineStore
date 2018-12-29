<?php
  session_set_cookie_params(3600, '/~ee10030/siem/shopping/');
  session_start();

  $BASE_DIR = '/usr/users2/mieec2010/ee10030/public_html/siem/shopping/';
  $BASE_URL = 'http://gnomo.fe.up.pt/~ee10030/siem/shopping/';

  $conn = new PDO('pgsql:host=gnomo.fe.up.pt;dbname=siem1331', 'siem1331', 'esteves');
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  include_once($BASE_DIR .'database/products.php');
  $categories = getAllCategories();


  include_once($BASE_DIR . 'lib/smarty/Smarty.class.php');

  
  $smarty = new Smarty;
  $smarty->template_dir = $BASE_DIR . 'templates/';
  $smarty->compile_dir = $BASE_DIR . 'templates_c/';
  $smarty->assign('BASE_URL', $BASE_URL);
  
  $smarty->assign('ERROR_MESSAGES', $_SESSION['error_messages']);  
  $smarty->assign('FIELD_ERRORS', $_SESSION['field_errors']);
  $smarty->assign('SUCCESS_MESSAGES', $_SESSION['success_messages']);
  $smarty->assign('FORM_VALUES', $_SESSION['form_values']);
  $smarty->assign('USERNAME', $_SESSION['username']);
  $smarty->assign('categories', $categories);
  $smarty->assign('nivel', $_SESSION['nivel']);
  
  unset($_SESSION['success_messages']);
  unset($_SESSION['error_messages']);  
  unset($_SESSION['field_errors']);
  unset($_SESSION['form_values']);

  if (is_array($_SESSION['shopping_cart']))
    foreach ($_SESSION['shopping_cart'] as $size) 
      $sc_size += $size;
  else $sc_size = 0;
  $smarty->assign('SC_SIZE', $sc_size);
?>
