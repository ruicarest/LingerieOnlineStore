<!DOCTYPE html>
<html>
  <head>
    <title>AFashion</title>
    <meta charset='utf-8'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"> 
    <link rel="stylesheet" href="{$BASE_URL}css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Exo+2:300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{$BASE_URL}lib/jPaginate/css/style.css">
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="{$BASE_URL}javascript/main.js"></script>
  </head>
  <body id="{$SECTION}">
    <header>

      <h1><a href="{$BASE_URL}"> <FONT FACE="Forte">AFashion</FONT><i class="fa fa-star-half-o"></i></a></h1>       
      <nav id="cssmenu">
          <ul>
            <li id="home-item"><a href="{$BASE_URL}pages/Home/about.php">Home</a></li>
            <li  id="messages-item">
              <a href="{$BASE_URL}pages/messages/creat_message.php">Opinion</a>
              <ul class="dropdown-menu">
                <li><a href="{$BASE_URL}pages/messages/creat_message.php">
                  Leave Yours</a></li>
                <li><a href="{$BASE_URL}pages/messages/list_user_messages.php">Opinions History</a></li>
              </ul>
            </li>
            <li id="products-item">
              <a href="{$BASE_URL}pages/products/list_all.php">Products</a>
              <ul>
                <li><a href="{$BASE_URL}pages/products/list_all.php">List All</a></li>
                {include file='common/search_menu.tpl'}
              </ul>
            </li>
            <li id="orders-item"><a href="{$BASE_URL}pages/products/usernameOrders.php">My Orders</a></li>
              <div class="menu_logged">
              <span id="shooping-cart">
                {if $USERNAME}
                {include file='common/menu_logged_in.tpl'}
                {else}
                {include file='common/menu_logged_out.tpl'}
                {/if}
              </span>
            </div>
          </ul>
      </nav>


    </header>

    <div id="error_messages">
{foreach $ERROR_MESSAGES as $error}
  <div class="error">{$error}<a class="close" href="#">X</a></div>
{/foreach}
</div>
<div id="success_messages">
{foreach $SUCCESS_MESSAGES as $success}
  <div class="success">{$success}<a class="close" href="#">X</a></div>
{/foreach}
</div>




    <!--<FONT FACE="Forte">AFashion</FONT><i class="fa fa-star-half-o"></i>-->
