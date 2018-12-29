<?php /* Smarty version Smarty-3.1.15, created on 2014-01-02 23:19:07
         compiled from "/usr/users2/mieec2010/ee10030/public_html/siem/shopping/templates/common/menu_logged_out.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48760014052af189733cb52-33474751%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee8d4f96a7a1123c83a41cf095529fb572aa1842' => 
    array (
      0 => '/usr/users2/mieec2010/ee10030/public_html/siem/shopping/templates/common/menu_logged_out.tpl',
      1 => 1388704708,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48760014052af189733cb52-33474751',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52af18973738a6_70621489',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52af18973738a6_70621489')) {function content_52af18973738a6_70621489($_smarty_tpl) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/register.php">Register</a></li>
<li><form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/login.php" method="post">
  <input type="text" placeholder="username" name="username">
  <input type="password" placeholder="password" name="password">
  <input type="submit" value=">">
</form></li>
<?php }} ?>
