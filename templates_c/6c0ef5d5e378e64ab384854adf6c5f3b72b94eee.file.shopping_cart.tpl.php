<?php /* Smarty version Smarty-3.1.15, created on 2013-12-13 11:18:14
         compiled from "/usr/users1/dei/arestivo/public_html/example.shopping/templates/products/shopping_cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14225721252aaec5d437a98-68989666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c0ef5d5e378e64ab384854adf6c5f3b72b94eee' => 
    array (
      0 => '/usr/users1/dei/arestivo/public_html/example.shopping/templates/products/shopping_cart.tpl',
      1 => 1386933463,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14225721252aaec5d437a98-68989666',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52aaec5d512788_72442511',
  'variables' => 
  array (
    'products' => 0,
    'BASE_URL' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52aaec5d512788_72442511')) {function content_52aaec5d512788_72442511($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<section id="products">
  <h2>Products</h2>

  <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>

  <article class="product-data">
    <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['product']->value['photo'];?>
">
    <span class="name"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</span>
    <span class="price"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</span>
    <span class="category"><?php echo $_smarty_tpl->tpl_vars['product']->value['category'];?>
</span><br>
    <span class="quantity">Quantity: <?php echo $_smarty_tpl->tpl_vars['product']->value['quantity'];?>
</span>
  </article>

  <?php } ?>

  <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/products/order.php">Order</a>

</section>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
