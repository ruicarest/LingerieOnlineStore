{foreach $categories as $category}
<li><a href="{$BASE_URL}pages/products/list_by_category.php?
category={$category.categoria}">{$category.categoria}</a></li>
{/foreach}
