<?php /* Smarty version Smarty-3.1.15, created on 2014-01-05 16:31:45
         compiled from "/usr/users2/mieec2010/ee10030/public_html/siem/shopping/templates/users/myaccount.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89792535452c83bd8203068-78819119%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b87fc8b04151d1f74b4622679f8731a5ed0192b' => 
    array (
      0 => '/usr/users2/mieec2010/ee10030/public_html/siem/shopping/templates/users/myaccount.tpl',
      1 => 1388939503,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89792535452c83bd8203068-78819119',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52c83bd82c5bb8_52853949',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'user' => 0,
    'FORM_VALUES' => 0,
    'FIELD_ERRORS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c83bd82c5bb8_52853949')) {function content_52c83bd82c5bb8_52853949($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="centerDiv">
  <section id="register">
    <h2><i class="fa fa-user"></i> My Account</h2>

    <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/changeaccount.php" method="post" enctype="multipart/form-data">
      </label>
      <br>
      <label><h3>Username: <?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</h3>
      </label>    
      <label>Name:<br> 
        <input type="text" name="realname" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['realname'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['user']->value['nome'];?>
"> 
        <span class="field_error"><?php echo $_smarty_tpl->tpl_vars['FIELD_ERRORS']->value['username'];?>
</span>
      <br>
      <label>Password:<br> 
        <input type="password" placeholder="Change Password" name="password" value="">
      </label>
      <br>
      <label>Morada:<br> 
        <input type="text" name="address" placeholder="<?php echo $_smarty_tpl->tpl_vars['user']->value['morada'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['address'];?>
">
      </label>
      <br>
      <label>Email:<br> 
        <input type="email" name="email" placeholder="<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['email'];?>
">
      </label>
      <br>
      <label>Telemovel:<br> 
        <input type="text" maxlength="9" name="phone" placeholder="<?php echo $_smarty_tpl->tpl_vars['user']->value['telemovel'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['phone'];?>
">
      </label>
      <br>
      <label>Photo:<br>
        <input type="file" name="photo">
      </label>
      <input type="submit" value="Change">
    </form>

  </section>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
