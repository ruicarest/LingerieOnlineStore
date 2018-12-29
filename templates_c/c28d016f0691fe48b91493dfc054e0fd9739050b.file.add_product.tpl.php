<?php /* Smarty version Smarty-3.1.15, created on 2014-01-04 14:39:21
         compiled from "/usr/users2/mieec2010/ee10030/public_html/siem/shopping/templates/products/add_product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:201961510952c54593a2c971-45203274%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c28d016f0691fe48b91493dfc054e0fd9739050b' => 
    array (
      0 => '/usr/users2/mieec2010/ee10030/public_html/siem/shopping/templates/products/add_product.tpl',
      1 => 1388846359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201961510952c54593a2c971-45203274',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52c54593ac9510_42098352',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'FORM_VALUES' => 0,
    'FIELD_ERRORS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c54593ac9510_42098352')) {function content_52c54593ac9510_42098352($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="centerDiv">
<section id="register">
  <h2>Add Product Information</h2>

  <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/products/new_product.php" method="post" enctype="multipart/form-data">
    <label>Artigo:<br>
      <input type="text" name="a_nome" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['a_nome'];?>
"> 
      <span class="field_error"><?php echo $_smarty_tpl->tpl_vars['FIELD_ERRORS']->value['a_nome'];?>
</span>
    </label>
    <label>Stock:<br> 
      <input type="text" name="a_stock" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['a_stock'];?>
">
    </label>
    <label>Price:<br> 
      <input type="text" name="a_preco" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['a_preco'];?>
">
    </label>
    <br>
    <label>Categoria:<br> 
      <input type="radio" name="categoria" value="Bras">Bras<br>
      <input type="radio" name="categoria" value="Pants">Pants<br>
      <input type="radio" name="categoria" value="Panties">Panties<br>
      <input type="radio" name="categoria" value="Sports">Sports<br>
      <input type="radio" name="categoria" value="SleepWear">SleepWear<br>
    </label>
    <br>
    <label>Photo:<br>
      <input type="file" name="photo">
    </label>
    <input type="submit" value="Add">
  </form>

</section>
</div>
<?php }} ?>
