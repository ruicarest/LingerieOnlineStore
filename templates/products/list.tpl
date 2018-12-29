{include file='common/header.tpl'}

{if $objective ne 'cart' && $objective ne 'My Orders'}
{include file='products/lateral.tpl'}
{/if}

{if $objective ne 'cart' && $objective ne 'My Orders'}
<div class="centerDiv">
{else}
<div class="cleanDiv">
{/if}
  <section id="products">
  <h2>{$objective}</h2>
  
    {if $nivel == 2}
        <a href="{$BASE_URL}pages/products/add_product.php"><i class="fa fa-plus-square-o"></i> Add Products</a>
    {/if}





  <div class="content">
    <div id="paginationdemo" class="demo">

          {$i=0}
          {$e=1}
          {while $resto >= $i}
          {assign var="p" value="p$e"}
            {if $i==0}
            <div id="p1" class="pagedemo _current" style="">
            {else}
            <div id="{$p}"class="pagedemo" style="display:none;">
            {/if}
                <table>
                {foreach $artigos as $artigo name=ola}
                  {if $smarty.foreach.ola.index >= $i*12 &&  ($i+1)*12 > $smarty.foreach.ola.index }
                      {if $u==4}
                        <tr>
                        {$u=0}
                      {/if}
                    <td><article class="product-data">
                    <img src="{$BASE_URL}{$artigo.photo}"><br>
                    <span class="name">{$artigo.a_nome}</span><br>
                    <span class="price">{$artigo.a_preco}€</span><br>
                    
                    {if $objective ne 'cart' && $objective ne 'My Orders'}
                      {if $USERNAME}
                        <a href="{$BASE_URL}actions/products/add_to_cart.php?
                        id={$artigo.a_id}">Add to Cart</a>
                      {/if}
                    {else}
                      <span class="category">Category: {$artigo.categoria}</span><br>
                      {if $objective ne 'cart'}
                        <span class="category">Quantity: {$artigo.quantidade}</span><br>
                      {else}
                        <span class="category">Quantity: {$artigo.quantity}</span><br>
                      {/if}
                    {/if}
                      </article></td>
                       {if $u==4}
                        </tr>
                      {/if}
                        
                       <span style="display:none">{$u++}</span>
                  {/if}
                {/foreach}
                </table>
            </div>
            <span style="display:none">{$i++}</span>
            <span style="display:none">{$e++}</span>
            {/while}
            <div id="demo5"></div>
      </div>
    </div>
  

  {if $objective == 'cart'}

  <input type="button" onclick="confirmation()" value="Order">

  {/if}
</section>
</div>

<script type="text/javascript">
<!--
function confirmation() {
  var answer = confirm("Are you sure?")
  if (answer){
    window.location = "{$BASE_URL}actions/products/order.php";
  }
  else{
  }
}
//-->
</script>



<script type="text/javascript" src="../../lib/jPaginate/jquery-1.3.2.js"></script>
    <script src="../../lib/jPaginate/jquery.paginate.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(function() {
      $("#demo5").paginate({
        count     : {$resto},
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
{include file='common/footer.tpl'}
