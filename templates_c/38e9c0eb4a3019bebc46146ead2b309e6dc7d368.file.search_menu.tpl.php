<?php /* Smarty version Smarty-3.1.15, created on 2013-12-28 13:09:14
         compiled from "/usr/users2/mieec2010/ee10030/public_html/siem/shopping/templates/common/search_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29403856052b472ebdace64-99060835%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38e9c0eb4a3019bebc46146ead2b309e6dc7d368' => 
    array (
      0 => '/usr/users2/mieec2010/ee10030/public_html/siem/shopping/templates/common/search_menu.tpl',
      1 => 1388236129,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29403856052b472ebdace64-99060835',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52b472ebdcc0d4_41441415',
  'variables' => 
  array (
    'categories' => 0,
    'BASE_URL' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b472ebdcc0d4_41441415')) {function content_52b472ebdcc0d4_41441415($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/list_by_category.php?
category=<?php echo $_smarty_tpl->tpl_vars['category']->value['categoria'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['categoria'];?>
</a></li>
<?php } ?>
<?php }} ?>
