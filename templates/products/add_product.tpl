{include file='common/header.tpl'}
<div class="centerDiv">
<section id="register">
  <h2>Add Product Information</h2>

  <form action="{$BASE_URL}actions/products/new_product.php" method="post" enctype="multipart/form-data">
    <label>Artigo:<br>
      <input type="text" name="a_nome" value="{$FORM_VALUES.a_nome}"> 
      <span class="field_error">{$FIELD_ERRORS.a_nome}</span>
    </label>
    <label>Stock:<br> 
      <input type="text" name="a_stock" value="{$FORM_VALUES.a_stock}">
    </label>
    <label>Price:<br> 
      <input type="text" name="a_preco" value="{$FORM_VALUES.a_preco}">
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
