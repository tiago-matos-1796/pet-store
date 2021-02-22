<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-01-16 12:55:31
         compiled from "/users/a999998/public_html/exame/application/views/templates/register_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12673461385c3f29c375bcd8-87029261%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f22b6acb1ecd8e262d3a03b376327c4fca89185e' => 
    array (
      0 => '/users/a999998/public_html/exame/application/views/templates/register_template.tpl',
      1 => 1547642484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12673461385c3f29c375bcd8-87029261',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'image_url' => 0,
    'menu1' => 0,
    'menu2' => 0,
    'validation_errors' => 0,
    'register' => 0,
    'apelido_utilizador' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5c3f29c37967c5_72722530',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c3f29c37967c5_72722530')) {function content_5c3f29c37967c5_72722530($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>

<body class="w3-container">

<div class="w3-image">
  <img src="<?php echo $_smarty_tpl->tpl_vars['image_url']->value;?>
" >
</div>

<header class="w3-topnav w3-blue">

	<div class="w3-half" style="text-align:left;">
		<?php echo $_smarty_tpl->tpl_vars['menu1']->value;?>

	</div>


	<div class="w3-half" style="text-align:right;">
		<?php echo $_smarty_tpl->tpl_vars['menu2']->value;?>

	</div>

</header>

<div class="w3-red" style="text-align:center;">

    <h3><?php echo $_smarty_tpl->tpl_vars['validation_errors']->value;?>
</h3>

</div>


<div class="w3-padding-large">

<form class="w3-form w3-card-4" method="post" action="<?php echo $_smarty_tpl->tpl_vars['register']->value;?>
">
  <h2 style="text-align:center;">Sign up</h2>
  <div class="w3-input-group">
	<label>Name</label>
    <input class="w3-input" type="text" name="apelido_utilizador"   id="apelido_utilizador" value="<?php echo $_smarty_tpl->tpl_vars['apelido_utilizador']->value;?>
" size="16" maxlength="50"/>
    
	<label>Email</label>   
    <input class="w3-input" type="email" name="email"  id="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" size="45" maxlength="30"/>

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
<?php }} ?>
