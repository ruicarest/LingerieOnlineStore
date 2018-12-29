<?php
function totalEncomendas() {
  	global $conn;
  	$stmt = $conn->prepare("select sum(quantidade) from encomenda ");
  	$stmt->execute();
    return $stmt->fetch();
}

function totalEarned(){
	global $conn;
  	$stmt = $conn->prepare("SELECT sum(quantidade),a_preco FROM artigo, 
  							encomenda WHERE artigo.a_nome = encomenda.a_nome 
							group by a_preco");
  	$stmt->execute();
    return $stmt->fetchAll();

}

function totalUsers(){
  global $conn;
    $stmt = $conn->prepare("SELECT count(*) from utilizador");
    $stmt->execute();
    return $stmt->fetch();

}


?>