<?php /* Smarty version Smarty-3.1.15, created on 2013-12-13 10:42:06
         compiled from "/usr/users1/dei/arestivo/public_html/example.shopping/templates/common/menu_logged_out.tpl" */ ?>
<?php /*%%SmartyHeaderCode:142497273252aae47e53e9e8-11714533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b72162069eff4b79f0baf3f074217982b0858c57' => 
    array (
      0 => '/usr/users1/dei/arestivo/public_html/example.shopping/templates/common/menu_logged_out.tpl',
      1 => 1386930715,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142497273252aae47e53e9e8-11714533',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52aae47e6001b1_15276812',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52aae47e6001b1_15276812')) {function content_52aae47e6001b1_15276812($_smarty_tpl) {?><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/register.php">Register</a>
<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/login.php" method="post">
  <input type="text" placeholder="username" name="username">
  <input type="password" placeholder="password" name="password">
  <input type="submit" value=">">
</form>
<?php }} ?>
