<?php /* Smarty version Smarty-3.1.15, created on 2014-01-05 17:21:10
         compiled from "/usr/users2/mieec2010/ee10030/public_html/siem/shopping/templates/messages/message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:109200018752c97f9951a3a2-18114191%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b00280d77af4ddad3e083af417c4cf6ad617df1' => 
    array (
      0 => '/usr/users2/mieec2010/ee10030/public_html/siem/shopping/templates/messages/message.tpl',
      1 => 1388942455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109200018752c97f9951a3a2-18114191',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52c97f995e5f71_41270237',
  'variables' => 
  array (
    'from' => 0,
    'messages' => 0,
    'BASE_URL' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c97f995e5f71_41270237')) {function content_52c97f995e5f71_41270237($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="cleanDiv">



<section id="messages">
  <h2><?php echo $_smarty_tpl->tpl_vars['from']->value;?>
</h2>
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


  <br>


  <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/messages/creat_message.php">Write us</a>

</section>

</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
