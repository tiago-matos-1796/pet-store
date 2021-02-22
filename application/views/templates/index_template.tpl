<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body class="w3-container">

<div class="w3-image">
  <img src="{$image_url}" >
</div>


<header class="w3-topnav w3-blue">

<div class="w3-half" style="text-align:left;">
 {$menu1}
</div>
<div class="w3-half" style="text-align:right;">
{$menu4} {$menu2} {$menu3}	 {$welcome} 
</div>

</header>


</br>

{foreach $blogs as $blog}
<div class="w3-card-4 ">

<div class="w3-col s8 w3-blue" style="text-align:left;">
  {$blog.name} 
</div>
<div class="w3-col s4 w3-blue" style="text-align:right;">


   	{if $session_id !=0 and $session_id == $blog.user_id}	
		<a href="{$post_url}{$blog.id}">update post</a> &nbsp;
	{else}
		&nbsp; &nbsp;
	{/if}
	

</div>

</br>

<div class="w3-container">
 <p> {$blog.content} </p>
 
</div>

<div class="w3-col s8 w3-blue" style="text-align:left;">
	updated: {$blog.updated_at} created: {$blog.created_at}
</div>

<div class="w3-col s4 w3-blue" style="text-align:right;">
	&nbsp; &nbsp;	
</div>

</div>

<br />
<br />

{/foreach}



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
