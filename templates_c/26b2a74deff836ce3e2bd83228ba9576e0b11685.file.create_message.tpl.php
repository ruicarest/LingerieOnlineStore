<?php /* Smarty version Smarty-3.1.15, created on 2014-01-05 17:17:15
         compiled from "/usr/users2/mieec2010/ee10030/public_html/siem/shopping/templates/messages/create_message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204895689752c97fb957d7e5-71278494%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26b2a74deff836ce3e2bd83228ba9576e0b11685' => 
    array (
      0 => '/usr/users2/mieec2010/ee10030/public_html/siem/shopping/templates/messages/create_message.tpl',
      1 => 1388942206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204895689752c97fb957d7e5-71278494',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52c97fb958a753_44256860',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c97fb958a753_44256860')) {function content_52c97fb958a753_44256860($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="cleanDiv">
<section id="messages">
  <h2> Leave us your Opinion </h2>
      
      <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/messages/creatmessage.php" method="post">
	      <textarea name="message" placeholder="Write what you fell about us..."></textarea>
	      <br>
		  <input type="submit" value="Send">
      </form>

      
</section>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
