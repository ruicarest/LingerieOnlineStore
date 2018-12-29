<?php /* Smarty version Smarty-3.1.15, created on 2014-01-05 17:58:27
         compiled from "/usr/users2/mieec2010/ee10030/public_html/siem/shopping/templates/products/lateral.tpl" */ ?>
<?php /*%%SmartyHeaderCode:133386759452c2b21379c2a0-60408511%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21dd67ff39cea12f3a5d39dd5b59869ff1073258' => 
    array (
      0 => '/usr/users2/mieec2010/ee10030/public_html/siem/shopping/templates/products/lateral.tpl',
      1 => 1388944703,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133386759452c2b21379c2a0-60408511',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52c2b2137be044_58743788',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'totalusers' => 0,
    'totalbuys' => 0,
    'totalprofit' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c2b2137be044_58743788')) {function content_52c2b2137be044_58743788($_smarty_tpl) {?>
<div class="leftDiv">
<span class="mini">Search Product</span>
<table>
<tr>
<td><h4><i class="fa fa-money"></i>  Price  </h4>
<form name="input" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/list_all_filter.php" method="get">
<input type="radio" name="range" value="1"> < 20€<br>
<input type="radio" name="range" value="2">20€  -  49€<br>
<input type="radio" name="range" value="3"> > 49€ <br>
<button type="submit">
                &nbsp <i class='fa fa-search'></i> &nbsp
</button>
</form>
</td>
</tr>
<tr>
<td><h4><i class="fa fa-file-text-o"></i>  Name  </h4>
<form class="search" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/search.php" method="POST">
              <input type="text" name="search" placeholder="Search"/><br>
              <button type="submit">
                &nbsp <i class='fa fa-search'></i> &nbsp
            </button>
            </form>
</td>
</tr>
<tr>
<td>
	<h4><i class="fa fa-tasks"></i>  Statistics: </h4>
	<strong>Users:</strong>  <?php echo $_smarty_tpl->tpl_vars['totalusers']->value;?>
 registed <br>
	<strong>Buys:</strong>  <?php echo $_smarty_tpl->tpl_vars['totalbuys']->value;?>
 articles <br>
	<strong>Amount joined:</strong>  <?php echo $_smarty_tpl->tpl_vars['totalprofit']->value;?>
 €<br>
</td>

</tr>
</table>

</div><?php }} ?>
