<!DOCTYPE html>
<html>
<title>Blog</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<body class="w3-container">

<div class="w3-image">
  <img src="{$image_url}" > 
</div>

<header class="w3-topnav w3-blue">

	<div class="w3-half" style="text-align:left;">
	 {$menu1}
	</div>
	<div class="w3-half" style="text-align:right;">
	{$menu2}
	</div>

</header>

<div class="w3-red" style="text-align:center;">

    <h3>{$form_validation}</h3>

</div>

</br>


<form class="w3-form w3-card-4" method="post" action="{$post_url}{$blog_id}">

 <div  style="text-align:center;"> 
   <textarea name="blog"   rows="5" cols=60">{$content}	</textarea><br>
   <input type="radio" name="visibility" align="middle" value="1"> Post to all
	<input type="radio" name="visibility" align="middle" value="0"> Post only to friends<br>
</div>

  <h3 style="text-align:center;">
  <input class="w3-btn w3-green w3-round-large" name="submit" type="submit" value="Go" />
<a href="{$index_url}">
  <input class="w3-btn w3-red w3-round-large"type="button" value="Cancel" />
</a>
</h3>

</form>


<footer class="w3-padding-large">

<div class="w3-half"  style="text-align:left;">
 &copy; 2019 Desenvolvimento de Aplica&ccedil;&otilde;es Web
</div>
<div class="w3-half" style="text-align:right;">
 Designed by <a href="#">Aluno</a>
</div>

</footer>




</body>
</html> 
