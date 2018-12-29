{include file='common/header.tpl'}
<div class="cleanDiv">



<section id="messages">
  <h2>{$from}</h2>
  {foreach $messages as $message}
 
    <article class="message-data">
      <img src="{$BASE_URL}{$message.photo}">
      <a href="{$BASE_URL}pages/messages/list_by_username.php?username={$message.username}" class="username">@{$message.username}</a>

      <span class="time">{$message.data}</span>
      <span class="price">{$message.texto}</span>
    </article>

  {/foreach}


  <br>


  <a href="{$BASE_URL}pages/messages/creat_message.php">Write us</a>

</section>

</div>
{include file='common/footer.tpl'}