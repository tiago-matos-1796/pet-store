<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
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
		{$menu2}
	</div>

</header>

<div class="w3-red" style="text-align:center;">

    <h3>{$validation_errors}</h3>

</div>


<div class="w3-padding-large">

<form class="w3-form w3-card-4" method="post" action="{$register}">
  <h2 style="text-align:center;">Sign up</h2>
  <div class="w3-input-group">
	<label>Name</label>
    <input class="w3-input" type="text" name="apelido_utilizador"   id="apelido_utilizador" value="{$apelido_utilizador}" size="16" maxlength="50"/>
    
	<label>Email</label>   
    <input class="w3-input" type="email" name="email"  id="email" value="{$email}" size="45" maxlength="30"/>

    <label>Password</label>    
    <input class="w3-input" type="password" name="pass1_utilizador"  id="pass1_utilizador" >
    
	<label>Password confirmation</label>
    <input class="w3-input" type="password" name="pass2_utilizador"  id="pass2_utilizador"  >

  </div>
  <h3 style="text-align:center;">
	  <input class="w3-btn w3-blue w3-round-large" name="submit" type="submit" value="Go" />
	  <input class="w3-btn w3-red w3-round-large"  name="reset" type="reset" value="Clear" />
  
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
