{include file='common/header.tpl'}
<div class="cleanDiv">
<section id="messages">
  <h2> Leave us your Opinion </h2>
      
      <form action="{$BASE_URL}actions/messages/creatmessage.php" method="post">
	      <textarea name="message" placeholder="Write what you fell about us..."></textarea>
	      <br>
		  <input type="submit" value="Send">
      </form>

      
</section>
</div>

{include file='common/footer.tpl'}