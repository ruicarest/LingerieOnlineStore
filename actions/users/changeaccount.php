<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');  

  $username = $_SESSION['username'];

  if(!empty($_POST['realname']))
  {
    $realname = strip_tags($_POST['realname']);
    changeName($realname, $username);
  }

  if(!empty($_POST['address']))
  {
    $address = strip_tags($_POST['address']);
    changeAddress($address, $username);
  }

  if(!empty($_POST['email']))
  {
    $email = strip_tags($_POST['email']);
    changeEmail($email, $username);
  }

  if(!empty($_POST['password']))
  {
    $email = ($_POST['password']);
    changePassword($password, $username);
  }

  $photo = $_FILES['photo'];
  $extension = end(explode(".", $photo["name"]));

  try {
    if (!empty($extension)) {
    move_uploaded_file($photo["tmp_name"], $BASE_DIR . "images/users/" . $username . '.' . $extension); // this is dangerous
    chmod($BASE_DIR . "images/users/" . $username . '.' . $extension, 0644);
    }
  } catch (PDOException $e) {
  
    if (strpos($e->getMessage(), 'users_pkey') !== false) {
      $_SESSION['error_messages'][] = 'Duplicate username';
      $_SESSION['field_errors']['username'] = 'Username already exists';
    }
    else $_SESSION['error_messages'][] = 'Error creating user';

    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/users/account.php');
    exit;
  }
  $_SESSION['success_messages'][] = 'User account changed';  
  header("Location: $BASE_URL" . 'pages/products/list_all.php');

  ?>