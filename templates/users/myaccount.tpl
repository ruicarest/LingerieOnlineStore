{include file='common/header.tpl'}
<div class="centerDiv">
  <section id="register">
    <h2><i class="fa fa-user"></i> My Account</h2>

    <form action="{$BASE_URL}actions/users/changeaccount.php" method="post" enctype="multipart/form-data">
      </label>
      <br>
      <label><h3>Username: {$user.username}</h3>
      </label>    
      <label>Name:<br> 
        <input type="text" name="realname" value="{$FORM_VALUES.realname}" placeholder="{$user.nome}"> 
        <span class="field_error">{$FIELD_ERRORS.username}</span>
      <br>
      <label>Password:<br> 
        <input type="password" placeholder="Change Password" name="password" value="">
      </label>
      <br>
      <label>Morada:<br> 
        <input type="text" name="address" placeholder="{$user.morada}" value="{$FORM_VALUES.address}">
      </label>
      <br>
      <label>Email:<br> 
        <input type="email" name="email" placeholder="{$user.email}" value="{$FORM_VALUES.email}">
      </label>
      <br>
      <label>Telemovel:<br> 
        <input type="text" maxlength="9" name="phone" placeholder="{$user.telemovel}" value="{$FORM_VALUES.phone}">
      </label>
      <br>
      <label>Photo:<br>
        <input type="file" name="photo">
      </label>
      <input type="submit" value="Change">
    </form>

  </section>
</div>
{include file='common/footer.tpl'}