<?php
 include_once('../../config/init.php');
 include_once($BASE_DIR .'database/messages.php');

if (!$_SESSION['username']) {
    $_SESSION['error_messages'][] = 'You need to login first';
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
  }

  $smarty->display('messages/create_message.tpl');



?>
