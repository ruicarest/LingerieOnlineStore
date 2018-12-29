<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');
  
  $username = $_SESSION['username'];

  $user = getUser($username);

  $smarty->assign('SECTION', 'user');

  $smarty->assign('user', $user);
  $smarty->display('users/myaccount.tpl');
?>
