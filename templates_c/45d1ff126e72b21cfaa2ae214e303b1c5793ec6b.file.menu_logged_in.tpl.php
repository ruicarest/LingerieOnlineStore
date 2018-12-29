<?php /* Smarty version Smarty-3.1.15, created on 2013-12-13 10:32:51
         compiled from "/usr/users1/dei/arestivo/public_html/example.shopping/templates/common/menu_logged_in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89625917652aae2530ac3e5-40350607%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45d1ff126e72b21cfaa2ae214e303b1c5793ec6b' => 
    array (
      0 => '/usr/users1/dei/arestivo/public_html/example.shopping/templates/common/menu_logged_in.tpl',
      1 => 1386930714,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89625917652aae2530ac3e5-40350607',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'USERNAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52aae2530bcfe7_76099963',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52aae2530bcfe7_76099963')) {function content_52aae2530bcfe7_76099963($_smarty_tpl) {?><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/logout.php">Logout</a>
<span class="username"><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</span>
<?php }} ?>
