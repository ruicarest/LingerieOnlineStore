<?php /* Smarty version Smarty-3.1.15, created on 2014-01-05 23:49:04
         compiled from "/usr/users2/mieec2010/ee10030/public_html/siem/shopping/templates/common/documents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74786452152c807e2049ad7-87058116%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4635f80db1d9ea54e754ab6bf1779b886b0728f1' => 
    array (
      0 => '/usr/users2/mieec2010/ee10030/public_html/siem/shopping/templates/common/documents.tpl',
      1 => 1388965725,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74786452152c807e2049ad7-87058116',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52c807e20d6f70_37611848',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c807e20d6f70_37611848')) {function content_52c807e20d6f70_37611848($_smarty_tpl) {?>
	<?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div class="register">
		<section id="products">
			<h2>Documentos</h2>

			<div class="content">  
				<br>
				<a href="https://dl.dropboxusercontent.com/u/16879855/trabalhoPHP.zip">
				<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/winrar.png" 
				alt="Zip"></a>
			</div>
		</section>
	</div>

	<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
