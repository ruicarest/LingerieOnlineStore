
<div class="leftDiv">
<span class="mini">Search Product</span>
<table>
<tr>
<td><h4><i class="fa fa-money"></i>  Price  </h4>
<form name="input" action="{$BASE_URL}pages/products/list_all_filter.php" method="get">
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
<form class="search" action="{$BASE_URL}pages/products/search.php" method="POST">
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
	<strong>Users:</strong>  {$totalusers} registed <br>
	<strong>Buys:</strong>  {$totalbuys} articles <br>
	<strong>Amount joined:</strong>  {$totalprofit} €<br>
</td>

</tr>
</table>

</div>