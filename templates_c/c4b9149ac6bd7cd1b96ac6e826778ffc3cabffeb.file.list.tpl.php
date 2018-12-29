<?php /* Smarty version Smarty-3.1.15, created on 2013-12-13 10:49:47
         compiled from "/usr/users1/dei/arestivo/public_html/example.shopping/templates/products/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89720475752aae2ffa86250-54240636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4b9149ac6bd7cd1b96ac6e826778ffc3cabffeb' => 
    array (
      0 => '/usr/users1/dei/arestivo/public_html/example.shopping/templates/products/list.tpl',
      1 => 1386931806,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89720475752aae2ffa86250-54240636',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52aae2ffba7b98_61870008',
  'variables' => 
  array (
    'products' => 0,
    'BASE_URL' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52aae2ffba7b98_61870008')) {function content_52aae2ffba7b98_61870008($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/products/add_to_cart.php?id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">Add to Cart</a>
  </article>

  <?php } ?>

</section>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
