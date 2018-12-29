<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/messages.php');
  
  if (!$_SESSION['username']) {
    $_SESSION['error_messages'][] = 'You need to login first';
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
  }
  

  $messages = getAllMessages();

  $smarty->assign('SECTION', 'messages');

  foreach ($messages as $key => $message) {
    unset($photo);
    if (file_exists($BASE_DIR.'images/users/'.$message['username'].'.png'))
      $photo = 'images/users/'.$message['username'].'.png';
    if (file_exists($BASE_DIR.'images/users/'.$message['username'].'.jpg'))
      $photo = 'images/users/'.$message['username'].'.jpg';
    if (!$photo) $photo = 'images/users/default.png';
    $messages[$key]['photo'] = $photo;
  }

  $from = 'All Opinions';
  $smarty->assign('from', $from);
  $smarty->assign('messages', $messages);
  $smarty->display('messages/message.tpl');
?>

