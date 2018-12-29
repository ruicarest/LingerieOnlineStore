<?php /* Smarty version Smarty-3.1.15, created on 2014-01-03 19:48:52
         compiled from "/usr/users2/mieec2010/ee10030/public_html/siem/shopping/templates/products/usernameOrders.tpl" */ ?>
<?php /*%%SmartyHeaderCode:191988457552b213d736c7a0-95895169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff09dda873de153bc9120a282cff2789ef9d327a' => 
    array (
      0 => '/usr/users2/mieec2010/ee10030/public_html/siem/shopping/templates/products/usernameOrders.tpl',
      1 => 1388778528,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191988457552b213d736c7a0-95895169',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52b213d7496a92_33870252',
  'variables' => 
  array (
    'orders' => 0,
    'BASE_URL' => 0,
    'order' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b213d7496a92_33870252')) {function content_52b213d7496a92_33870252($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('products/lateral.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="centerDiv">
<section id="products">
  <h2>My Orders</h2>

  <?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
?>

  <article class="product-data">
    <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['order']->value['photo'];?>
">
    <span class="name"><?php echo $_smarty_tpl->tpl_vars['order']->value['a_nome'];?>
</span><br>
    <span class="name">Quantity: </span>
    <span class="price"><?php echo $_smarty_tpl->tpl_vars['order']->value['quantidade'];?>
</span><br>
    <span class="name">Preço: </span>
    <span class="price"><?php echo $_smarty_tpl->tpl_vars['order']->value['a_preco'];?>
</span><br>
  </article>

  <?php } ?>

</section>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
