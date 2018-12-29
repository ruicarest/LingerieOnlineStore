<?php /* Smarty version Smarty-3.1.15, created on 2014-01-04 16:40:01
         compiled from "/usr/users2/mieec2010/ee10030/public_html/siem/shopping/templates/messages/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16403008852b22795c6d5e2-34717591%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7ff37cde41b321f69313a62abc29ac5e2330462' => 
    array (
      0 => '/usr/users2/mieec2010/ee10030/public_html/siem/shopping/templates/messages/list.tpl',
      1 => 1388853593,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16403008852b22795c6d5e2-34717591',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52b22795d331b8_48399252',
  'variables' => 
  array (
    'messages' => 0,
    'BASE_URL' => 0,
    'message' => 0,
    'last_message_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b22795d331b8_48399252')) {function content_52b22795d331b8_48399252($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<section id="messages">
  <h2>Mensagens</h2>

  <div id="new_messages"></div>

  <?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->_loop = true;
?>

  <article class="message-data">
  	<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['message']->value['photo'];?>
">
    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/messages/list_by_username.php?username=<?php echo $_smarty_tpl->tpl_vars['message']->value['username'];?>
" class="username">@<?php echo $_smarty_tpl->tpl_vars['message']->value['username'];?>
</a>

    <span class="time"><?php echo $_smarty_tpl->tpl_vars['message']->value['data'];?>
</span>
    <span class="price"><?php echo $_smarty_tpl->tpl_vars['message']->value['texto'];?>
</span>
  </article>

  <?php } ?>
  <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/messages/createMessage.php">Create Message</a>

</section>

<script>last_message_id = <?php echo $_smarty_tpl->tpl_vars['last_message_id']->value;?>
</script>

<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/messages.js"></script>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
