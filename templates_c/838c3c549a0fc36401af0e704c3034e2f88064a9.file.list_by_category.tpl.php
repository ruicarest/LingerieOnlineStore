<?php /* Smarty version Smarty-3.1.15, created on 2014-01-04 15:14:57
         compiled from "/usr/users2/mieec2010/ee10030/public_html/siem/shopping/templates/products/list_by_category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96986167852bed89d986520-69564210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '838c3c549a0fc36401af0e704c3034e2f88064a9' => 
    array (
      0 => '/usr/users2/mieec2010/ee10030/public_html/siem/shopping/templates/products/list_by_category.tpl',
      1 => 1388848493,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96986167852bed89d986520-69564210',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52bed89da97d06_79655447',
  'variables' => 
  array (
    'objective' => 0,
    'nivel' => 0,
    'BASE_URL' => 0,
    'resto' => 0,
    'i' => 0,
    'p' => 0,
    'artigos' => 0,
    'u' => 0,
    'artigo' => 0,
    'USERNAME' => 0,
    'e' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52bed89da97d06_79655447')) {function content_52bed89da97d06_79655447($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('products/lateral.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="centerDiv">
<section id="products">
  <h2><?php echo $_smarty_tpl->tpl_vars['objective']->value;?>
</h2>
  
  <?php if ($_smarty_tpl->tpl_vars['nivel']->value==2) {?>
      <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/products/add_product.php"><i class="fa fa-plus-square-o"></i> Add Products</a>
    <?php }?>





<div class="content">
  <div id="paginationdemo" class="demo">

        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['e'] = new Smarty_variable(1, null, 0);?>
        <?php while ($_smarty_tpl->tpl_vars['resto']->value>=$_smarty_tpl->tpl_vars['i']->value) {?>
        <?php $_smarty_tpl->tpl_vars["p"] = new Smarty_variable("p".((string)$_smarty_tpl->tpl_vars['e']->value), null, 0);?>
          <?php if ($_smarty_tpl->tpl_vars['i']->value==0) {?>
          <div id="p1" class="pagedemo _current" style="">
          <?php } else { ?>
          <div id="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
"class="pagedemo" style="display:none;">
          <?php }?>
              <table>
              <?php  $_smarty_tpl->tpl_vars['artigo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['artigo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['artigos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['ola']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['artigo']->key => $_smarty_tpl->tpl_vars['artigo']->value) {
$_smarty_tpl->tpl_vars['artigo']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['ola']['index']++;
?>
                <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['ola']['index']>=$_smarty_tpl->tpl_vars['i']->value*12&&($_smarty_tpl->tpl_vars['i']->value+1)*12>$_smarty_tpl->getVariable('smarty')->value['foreach']['ola']['index']) {?>
                    <?php if ($_smarty_tpl->tpl_vars['u']->value==4) {?>
                      <tr>
                      <?php $_smarty_tpl->tpl_vars['u'] = new Smarty_variable(0, null, 0);?>
                    <?php }?>
                  <td><article class="product-data">
                  <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['artigo']->value['photo'];?>
"><br>
                  <span class="name"><?php echo $_smarty_tpl->tpl_vars['artigo']->value['a_nome'];?>
</span><br>
                  <span class="price"><?php echo $_smarty_tpl->tpl_vars['artigo']->value['a_preco'];?>
€</span><br>
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
                    </article></td>
                     <?php if ($_smarty_tpl->tpl_vars['u']->value==4) {?>
                      </tr>
                    <?php }?>
                      
                     <span style="display:none"><?php echo $_smarty_tpl->tpl_vars['u']->value++;?>
</span>
                <?php }?>
              <?php } ?>
            </table>
          </div>
        <span style="display:none"><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
</span>
        <span style="display:none"><?php echo $_smarty_tpl->tpl_vars['e']->value++;?>
</span>
        <?php }?>
        <div id="demo5"></div>
      </div>
</div>
</section>
</div>


<script type="text/javascript" src="../../lib/jPaginate/jquery-1.3.2.js"></script>
    <script src="../../lib/jPaginate/jquery.paginate.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(function() {
      $("#demo5").paginate({
        count     : <?php echo $_smarty_tpl->tpl_vars['resto']->value;?>
,
        start     : 1,
        display     : 3,
        border          : true,
        border_color      : '#fff',
        text_color        : '#fff',
        background_color      : 'black',  
        border_hover_color    : '#ccc',
        text_hover_color      : '#000',
        background_hover_color  : '#fff', 
        images          : false,
        mouse         : 'press',
        onChange          : function(page){
                      $('._current','#paginationdemo').removeClass('_current').hide();
                      $('#p'+page).addClass('_current').show();
                      }
      });
    });
    </script>

  
        
    




<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
