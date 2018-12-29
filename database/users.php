<?php
  function createUser($realname, $username, $password) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO utilizador (nome,username,password) 
                            VALUES (?, ?, ?)");
    $stmt->execute(array($realname, $username, sha1($password)));
  }

  
  function isLoginCorrect($username, $password) {
  global $conn;
  $stmt = $conn->prepare("SELECT * 
                          FROM utilizador 
                          WHERE username = ? AND password = ?");
  $stmt->execute(array($username, sha1($password)));
  return $stmt->fetch() == true;
}

  function isAdminUser($username) {
    global $conn;
    $stmt = $conn->prepare("SELECT nivel
                          FROM utilizador 
                          WHERE username = ?");
    $stmt->execute(array($username));
    return $stmt->fetch();
  }

  function getUser($username) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM utilizador WHERE username = ?");
    $stmt->execute(array($username));
    return $stmt->fetch();
  }

  function changeName($realname, $username) {
    global $conn;
    $stmt = $conn->prepare("UPDATE utilizador SET nome = ? WHERE username = ?");
    $stmt->execute(array($realname, $username));
    return $stmt->fetch();
  }

  function changeAddress($address, $username) {
    global $conn;
    $stmt = $conn->prepare("UPDATE utilizador SET morada = ? WHERE username = ?");
    $stmt->execute(array($address, $username));
    return $stmt->fetch();
  }

  function changeEmail($email, $username) {
    global $conn;
    $stmt = $conn->prepare("UPDATE utilizador SET email = ? WHERE username = ?");
    $stmt->execute(array($email, $username));
    return $stmt->fetch();
  }

  function changePassword($password, $username) {
    global $conn;
    $stmt = $conn->prepare("UPDATE utilizador SET password = ? WHERE username = ?");
    $stmt->execute(array(sha1($password), $username));
    return $stmt->fetch();
  }






?>