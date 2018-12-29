<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/products.php');

if (!$_POST['a_nome'] || !$_POST['a_stock'] || !$_POST['categoria'] || !$_FILES['photo'] || !$_POST['a_preco']) {
    $_SESSION['error_messages'][] = 'All fields are mandatory';
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/products/add_product.php');
    exit;
  }



$a_nome = strip_tags($_POST['a_nome']);
$categoria = strip_tags($_POST['categoria']);

$a_stock = $_POST['a_stock'];
$a_preco = $_POST['a_preco'];
$teste =  kaka . $_FILES['photo'][0];

$photo = $_FILES['photo'];



$extension = end(explode(".", $photo["name"]));

$everything = $a_nome . '.' . $extension;
try {
    addProduct($a_nome, $everything, $a_stock, $categoria, $a_preco);
    if ($_FILES['photo']) {
    move_uploaded_file($photo["tmp_name"], $BASE_DIR . "images/products/" . $everything); // this is dangerous
    chmod($BASE_DIR . "images/products/" . $a_nome . '.' . $extension, 0644);
    }
  } catch (PDOException $e) {

    if (strpos($e->getMessage(), 'users_pkey') !== false) {
      $_SESSION['error_messages'][] = 'Duplicate username';
      $_SESSION['field_errors']['username'] = 'Username already exists';
    }
    else $_SESSION['error_messages'][] = 'Error creating product';
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/products/add_product.php');
    exit;
  }
  $_SESSION['success_messages'][] = 'Products Added';
  header("Location: $BASE_URL" . 'pages/products/list_all.php');
?>
