<?php /* Smarty version Smarty-3.1.15, created on 2014-01-03 15:21:22
         compiled from "/usr/users2/mieec2010/ee10030/public_html/siem/shopping/templates/products/list_filter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:70353706352bf5c55b62ba2-08028457%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7a9c04b0a90d8bfbe40a94c9aa648623c1b8769' => 
    array (
      0 => '/usr/users2/mieec2010/ee10030/public_html/siem/shopping/templates/products/list_filter.tpl',
      1 => 1388679396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70353706352bf5c55b62ba2-08028457',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52bf5c55caf057_45611289',
  'variables' => 
  array (
    'price1' => 0,
    'price2' => 0,
    'artigos' => 0,
    'BASE_URL' => 0,
    'artigo' => 0,
    'USERNAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52bf5c55caf057_45611289')) {function content_52bf5c55caf057_45611289($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('products/filter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('products/lateral.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="centerDiv">
<section id="products">
  <h2>Products Range [<?php echo $_smarty_tpl->tpl_vars['price1']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['price2']->value;?>
]</h2>

  <?php echo $_smarty_tpl->getSubTemplate ('products/filter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


  <?php  $_smarty_tpl->tpl_vars['artigo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['artigo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['artigos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['artigo']->key => $_smarty_tpl->tpl_vars['artigo']->value) {
$_smarty_tpl->tpl_vars['artigo']->_loop = true;
?>

  <article class="product-data">
    <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['artigo']->value['photo'];?>
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
    
  </article>

  <?php } ?>

</section>
<div class="centerDiv">
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
