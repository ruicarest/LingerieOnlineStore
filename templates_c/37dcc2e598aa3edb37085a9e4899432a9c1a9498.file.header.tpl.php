<?php /* Smarty version Smarty-3.1.15, created on 2014-01-05 19:39:26
         compiled from "/usr/users2/mieec2010/ee10030/public_html/siem/shopping/templates/common/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75203600052af18972a4958-31869698%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37dcc2e598aa3edb37085a9e4899432a9c1a9498' => 
    array (
      0 => '/usr/users2/mieec2010/ee10030/public_html/siem/shopping/templates/common/header.tpl',
      1 => 1388950761,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75203600052af18972a4958-31869698',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52af1897329f07_97930138',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'SECTION' => 0,
    'USERNAME' => 0,
    'ERROR_MESSAGES' => 0,
    'error' => 0,
    'SUCCESS_MESSAGES' => 0,
    'success' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52af1897329f07_97930138')) {function content_52af1897329f07_97930138($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title>AFashion</title>
    <meta charset='utf-8'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"> 
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Exo+2:300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
lib/jPaginate/css/style.css">
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/main.js"></script>
  </head>
  <body id="<?php echo $_smarty_tpl->tpl_vars['SECTION']->value;?>
">
    <header>

      <h1><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
"> <FONT FACE="Forte">AFashion</FONT><i class="fa fa-star-half-o"></i></a></h1>       
      <nav id="cssmenu">
          <ul>
            <li id="home-item"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/Home/about.php">Home</a></li>
            <li  id="messages-item">
              <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/messages/creat_message.php">Opinion</a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/messages/creat_message.php">
                  Leave Yours</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/messages/list_user_messages.php">Opinions History</a></li>
              </ul>
            </li>
            <li id="products-item">
              <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/list_all.php">Products</a>
              <ul>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/list_all.php">List All</a></li>
                <?php echo $_smarty_tpl->getSubTemplate ('common/search_menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

              </ul>
            </li>
            <li id="orders-item"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/usernameOrders.php">My Orders</a></li>
              <div class="menu_logged">
              <span id="shooping-cart">
                <?php if ($_smarty_tpl->tpl_vars['USERNAME']->value) {?>
                <?php echo $_smarty_tpl->getSubTemplate ('common/menu_logged_in.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php } else { ?>
                <?php echo $_smarty_tpl->getSubTemplate ('common/menu_logged_out.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php }?>
              </span>
            </div>
          </ul>
      </nav>


    </header>

    <div id="error_messages">
<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
  <div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<a class="close" href="#">X</a></div>
<?php } ?>
</div>
<div id="success_messages">
<?php  $_smarty_tpl->tpl_vars['success'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['success']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SUCCESS_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['success']->key => $_smarty_tpl->tpl_vars['success']->value) {
$_smarty_tpl->tpl_vars['success']->_loop = true;
?>
  <div class="success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
<a class="close" href="#">X</a></div>
<?php } ?>
</div>




    <!--<FONT FACE="Forte">AFashion</FONT><i class="fa fa-star-half-o"></i>-->
<?php }} ?>
