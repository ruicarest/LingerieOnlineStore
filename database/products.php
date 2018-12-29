<?php
  
  function getAllProducts() {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM artigo");
    $stmt->execute();
    return $stmt->fetchAll();
  }

  function getProduct($id) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM artigo WHERE a_id = ?");
    $stmt->execute(array($id));
    return $stmt->fetch();
  }

  function getProductByName($a_nome) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM artigo WHERE a_nome = ?");
    $stmt->execute(array($a_nome));
    return $stmt->fetch();
  }  

  function getProductsByPrice($a_preco1, $a_preco2) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM artigo WHERE a_preco >= ? and a_preco < ?");
    $stmt->execute(array($a_preco1, $a_preco2));
    return $stmt->fetchAll();
  } 

  function getAllProductsByCategory($category) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM artigo WHERE categoria = ?");
    $stmt->execute(array($category));
    return $stmt->fetchAll();
  }

  function placeOrder($a_nome, $username, $quantity) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO encomenda (a_nome, username, quantidade)
                            VALUES (?,?,?)");
    $stmt->execute(array($a_nome, $username, $quantity));
    return $stmt->fetch();
  }

  function removeStock($newStock, $a_nome) {
    global $conn;
    $stmt = $conn->prepare("UPDATE artigo SET a_stock = ? WHERE a_nome = ?");
    $stmt->execute(array($newStock, $a_nome));
    return $stmt->fetch();
  }

  function getOrders($username) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM artigo 
                            join encomenda using (a_nome)
                            join utilizador using (username)
                            WHERE encomenda.username = ?");
    $stmt->execute(array($username));
    return $stmt->fetchAll();
  }

  function getAllOrders() {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM artigo 
                            join encomenda using (a_nome)
                            join utilizador using (username)");
    $stmt->execute();
    return $stmt->fetchAll();
  }

  function getAllCategories() {
    global $conn;
    $stmt = $conn->prepare("SELECT categoria FROM artigo group by categoria");
    $stmt->execute();
    return $stmt->fetchAll();
  }

  function addProduct($a_nome, $photo, $a_stock, $categoria, $a_preco){
    global $conn;
    $stmt = $conn->prepare("INSERT INTO artigo (a_nome, photo, a_stock, categoria, a_preco)
                            VALUES (?,?,?,?,?)"); 
    $stmt->execute(array($a_nome, $photo, $a_stock, $categoria, $a_preco));
    return $stmt->fetch();

  }

  function countProducts(){
    global $conn;
    $stmt = $conn->prepare("SELECT count(*) from artigo"); 
    $stmt->execute();
    return $stmt->fetch();

  }


?>
