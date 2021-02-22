<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>

<body class="w3-container">

<div class="w3-image">
  <img src="{$image_url}" 
</div>


<header class="w3-topnav w3-blue">

	<div class="w3-half" style="text-align:left;">
		{$menu1}
	</div>

	<div class="w3-half" style="text-align:right;">
		{$menu2}
	</div>

</header>


<div class="w3-padding-large">

<form class="w3-form w3-card-4" id="login_form"  method="post" action="{$login_action}">

      			<h2 style="text-align:center;color:red;">{$message}</h2>

	
  <h2 style="text-align:center;">Login</h2>
  <div class="w3-input-group"> 
    <label>Email</label>  
    <input class="w3-input" type="email" id="username_login" name="username_login">

    <label>Password</label>
    <input class="w3-input" type="password" id="pass_utilizador" name="pass_utilizador" >
   
  </div>
  <h3 style="text-align:center;">
  <input class="w3-btn w3-orange w3-round-large" name="submit" type="submit" value="Go" /> &nbsp;
</h3>

</form>
</div>

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
