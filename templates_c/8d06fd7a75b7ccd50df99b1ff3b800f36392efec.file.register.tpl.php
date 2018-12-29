<?php /* Smarty version Smarty-3.1.15, created on 2014-01-05 19:35:01
         compiled from "/usr/users2/mieec2010/ee10030/public_html/siem/shopping/templates/users/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:178892074652af1e47cc05e7-15304785%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d06fd7a75b7ccd50df99b1ff3b800f36392efec' => 
    array (
      0 => '/usr/users2/mieec2010/ee10030/public_html/siem/shopping/templates/users/register.tpl',
      1 => 1388950495,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178892074652af1e47cc05e7-15304785',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52af1e47d7ba17_86445353',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'FORM_VALUES' => 0,
    'FIELD_ERRORS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52af1e47d7ba17_86445353')) {function content_52af1e47d7ba17_86445353($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="register">
  <section id="register">
    <h2>Register</h2>

    <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/register.php" method="post" enctype="multipart/form-data">
      <label>Name:<br> 
        <input type="text" name="realname" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['realname'];?>
"> 
        <span class="field_error"><?php echo $_smarty_tpl->tpl_vars['FIELD_ERRORS']->value['username'];?>
</span>
      </label>
      <br>
      <label>Username:<br> 
        <input type="text" name="username" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['username'];?>
">
      </label>
      <br>
      <label>Password:<br> 
        <input type="password" name="password" value="">
      </label>
      <br>
      <label>Photo:<br>
        <input type="file" name="photo">
      </label>
      <input type="submit" value="Register">
    </form>

  </section>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
