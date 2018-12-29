<?php /* Smarty version Smarty-3.1.15, created on 2014-01-03 20:15:26
         compiled from "/usr/users2/mieec2010/ee10030/public_html/siem/shopping/templates/products/list_search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162622094652bdd32c50a1c7-05515113%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe761395c3864ad21a309d674b142f4c4e3017b8' => 
    array (
      0 => '/usr/users2/mieec2010/ee10030/public_html/siem/shopping/templates/products/list_search.tpl',
      1 => 1388777815,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162622094652bdd32c50a1c7-05515113',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52bdd32c5e9f42_04091170',
  'variables' => 
  array (
    'artigos' => 0,
    'BASE_URL' => 0,
    'artigo' => 0,
    'USERNAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52bdd32c5e9f42_04091170')) {function content_52bdd32c5e9f42_04091170($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('products/lateral.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<section id="products">
  <h2>Products</h2>
<?php  $_smarty_tpl->tpl_vars['artigo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['artigo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['artigos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['artigo']->key => $_smarty_tpl->tpl_vars['artigo']->value) {
$_smarty_tpl->tpl_vars['artigo']->_loop = true;
?>
  <article class="product-data">
    <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/images/products/<?php echo $_smarty_tpl->tpl_vars['artigo']->value['photo'];?>
">
    <span class="name"><?php echo $_smarty_tpl->tpl_vars['artigo']->value['a_nome'];?>
</span>
    <span class="price"><?php echo $_smarty_tpl->tpl_vars['artigo']->value['a_preco'];?>
€</span>
    <span class="category"><?php echo $_smarty_tpl->tpl_vars['artigo']->value['a_categoria'];?>
</span><br>
    <span class="name">Stock: </span>
    <span class="price"><?php echo $_smarty_tpl->tpl_vars['artigo']->value['a_stock'];?>
 units</span><br>
    <?php if ($_smarty_tpl->tpl_vars['USERNAME']->value) {?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/products/add_to_cart.php?
	id=<?php echo $_smarty_tpl->tpl_vars['artigo']->value['a_id'];?>
">Add to Cart</a>
    <?php }?>
<?php } ?>
  </article>

</section>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
