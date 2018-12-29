<?php /* Smarty version Smarty-3.1.15, created on 2014-01-04 15:34:03
         compiled from "/usr/users2/mieec2010/ee10030/public_html/siem/shopping/templates/products/shopping_cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112492866752af21738ce9a2-74872169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbed0ee5851856317603f4187f601c9dcfd29175' => 
    array (
      0 => '/usr/users2/mieec2010/ee10030/public_html/siem/shopping/templates/products/shopping_cart.tpl',
      1 => 1388849641,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112492866752af21738ce9a2-74872169',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52af21739f9064_40362283',
  'variables' => 
  array (
    'artigos' => 0,
    'BASE_URL' => 0,
    'artigo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52af21739f9064_40362283')) {function content_52af21739f9064_40362283($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('products/lateral.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="centerDiv">
<section id="products">
  <h2>Shopping Cart</h2>

  <?php  $_smarty_tpl->tpl_vars['artigo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['artigo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['artigos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['artigo']->key => $_smarty_tpl->tpl_vars['artigo']->value) {
$_smarty_tpl->tpl_vars['artigo']->_loop = true;
?>

  <article class="product-data-cart">
    <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['artigo']->value['photo'];?>
">
    <span class="name"><?php echo $_smarty_tpl->tpl_vars['artigo']->value['a_nome'];?>
</span>
    <span class="price"><?php echo $_smarty_tpl->tpl_vars['artigo']->value['a_preco'];?>
</span>
    <span class="category"><?php echo $_smarty_tpl->tpl_vars['artigo']->value['a_categoria'];?>
</span><br>
    <span class="quantity">Quantity: <?php echo $_smarty_tpl->tpl_vars['artigo']->value['quantity'];?>
</span>
  </article>

  <?php } ?>

  <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/products/order.php">Order</a>

</section>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
