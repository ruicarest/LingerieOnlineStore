<?php
	function createMessage($username, $message) {
  	global $conn;
  	$stmt = $conn->prepare("INSERT INTO mensagens (username, texto, data)
                          VALUES (?, ?, CURRENT_TIMESTAMP)");
  	$stmt->execute(array($username, $message));
    return $stmt->fetch();
  }


	function getAllMessages() {
  	global $conn;
  	$stmt = $conn->prepare("SELECT * from mensagens
                            ORDER BY data desc");
  	$stmt->execute();
    return $stmt->fetchAll();
  }
	
	function getMessagesByUsername($username) {
  	global $conn;
  	$stmt = $conn->prepare("SELECT * from mensagens where username = ? ORDER BY data desc");
  	$stmt->execute(array($username));
    return $stmt->fetchAll();
  }
?>
