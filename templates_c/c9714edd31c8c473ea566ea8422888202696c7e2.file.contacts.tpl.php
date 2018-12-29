<?php /* Smarty version Smarty-3.1.15, created on 2014-01-05 19:42:44
         compiled from "/usr/users2/mieec2010/ee10030/public_html/siem/shopping/templates/common/contacts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:68344631852c806789024e3-79296604%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9714edd31c8c473ea566ea8422888202696c7e2' => 
    array (
      0 => '/usr/users2/mieec2010/ee10030/public_html/siem/shopping/templates/common/contacts.tpl',
      1 => 1388950962,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68344631852c806789024e3-79296604',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52c806789810a5_98557907',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c806789810a5_98557907')) {function content_52c806789810a5_98557907($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="register">
	<section id="content">
	  	<h2>Contactos</h2>
		
		<div class="content">  
	    	<p><b>João Falcão</b></p>
		    <p>
		        <a href onclick="secure='@'; this.	href='mai'+'lto:joao10falcao@gmail.com'">
		        	<img id="images1" 
		        	src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/Gmail-icon.png" 
		        	alt="Gmail"></a>
		        	<a href onclick="secure='@'; this.href='mai'+'lto:ee10030@fe.up.pt'">
		        	<img id="images2" 
		        	src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/webmailfeup_fp.png" 
		        	alt="Webmail">
		        </a>
	      	</p>
	      	<p><b>Rui Esteves</b></p>
			<p>
				<a href onclick="secure='@'; this.href='mai'+'lto:ruicarest@gmail.com'">
					<img id="images1" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/Gmail-icon.png" alt="Gmail"></a>
					<a href onclick="secure='@'; this.href='mai'+'lto:ee10054@fe.up.pt'">
					<img id="images2" 
					src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/webmailfeup_fp.png" alt="Webmail">
				</a>
			</p>
	    </div>

	</section>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
