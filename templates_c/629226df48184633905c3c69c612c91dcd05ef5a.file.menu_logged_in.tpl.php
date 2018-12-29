<?php /* Smarty version Smarty-3.1.15, created on 2014-01-04 16:56:35
         compiled from "/usr/users2/mieec2010/ee10030/public_html/siem/shopping/templates/common/menu_logged_in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:110471618352af22201d2f55-93117693%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '629226df48184633905c3c69c612c91dcd05ef5a' => 
    array (
      0 => '/usr/users2/mieec2010/ee10030/public_html/siem/shopping/templates/common/menu_logged_in.tpl',
      1 => 1388854557,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110471618352af22201d2f55-93117693',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52af2220260b47_57462275',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'USERNAME' => 0,
    'SC_SIZE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52af2220260b47_57462275')) {function content_52af2220260b47_57462275($_smarty_tpl) {?>
<nav id="cssmenu">

              <ul>
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/logout.php">Logout</a></li>
                <li id="user-item">
                <a href=""><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/account.php">
                    My Account</a></li>
                </ul>
                </li>
               <li id="car-item"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/shopping_cart.php"><i class="fa fa-inverse fa-shopping-cart"></i> (<?php echo $_smarty_tpl->tpl_vars['SC_SIZE']->value;?>
)</a></li>
              </ul>
      </nav>


<?php }} ?>
