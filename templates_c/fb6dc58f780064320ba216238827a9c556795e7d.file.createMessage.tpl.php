<?php /* Smarty version Smarty-3.1.15, created on 2014-01-05 15:28:02
         compiled from "/usr/users2/mieec2010/ee10030/public_html/siem/shopping/templates/messages/createMessage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181492196252b4499d328629-40200826%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb6dc58f780064320ba216238827a9c556795e7d' => 
    array (
      0 => '/usr/users2/mieec2010/ee10030/public_html/siem/shopping/templates/messages/createMessage.tpl',
      1 => 1388935679,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181492196252b4499d328629-40200826',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52b4499d407af4_92200900',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b4499d407af4_92200900')) {function content_52b4499d407af4_92200900($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="centerDiv">
<section id="messages">
  <h2> Open a Ticket </h2>
      

      <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/messages/message.php" method="post">
	      <textarea name="message" placeholder="tell us your problem"></textarea>
	        
	      <label>Categoria:<br> 
	      <input type="radio" name="categoria" value="Encomendas">Encomendas<br>
	      <input type="radio" name="categoria" value="Patrocinadores">Patrocinadores<br>
	      <input type="radio" name="categoria" value="Opiniao">Opinião<br>
	   	  </label>

	   	  <input type="submit" value="Send">
      </form>

      
</section>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
