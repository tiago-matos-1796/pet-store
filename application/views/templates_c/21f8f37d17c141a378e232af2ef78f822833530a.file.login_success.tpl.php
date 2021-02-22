<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-01-16 12:56:35
         compiled from "/users/a999998/public_html/exame/application/views/templates/login_success.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15628220545c3dcdd0d36179-54023051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21f8f37d17c141a378e232af2ef78f822833530a' => 
    array (
      0 => '/users/a999998/public_html/exame/application/views/templates/login_success.tpl',
      1 => 1547642382,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15628220545c3dcdd0d36179-54023051',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5c3dcdd0d59628_44963427',
  'variables' => 
  array (
    'index_url' => 0,
    'image_url' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c3dcdd0d59628_44963427')) {function content_5c3dcdd0d59628_44963427($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
	<head>
  		<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="refresh" content="5; url=<?php echo $_smarty_tpl->tpl_vars['index_url']->value;?>
" />
  		<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
		<title>Message</title>
	</head>
	
	<body class="w3-container">
  		
		<div class="w3-image">
		  <img src=<?php echo $_smarty_tpl->tpl_vars['image_url']->value;?>
 >
		</div>

  		<div class="w3-card-12 w3-yellow"  >	

				
			<h2 style="text-align:center;">Welcome back <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 !</h2>
			 
			
		</div>	
			
		<footer class="w3-padding-large">

		<div class="w3-half"  style="text-align:left;">
		 &copy; 2019 Desenvolvimento de Aplica&ccedil;&otilde;es Web
		</div>
		<div class="w3-half" style="text-align:right;">
		 Designed by <a>Aluno</a>
		</div>

		</footer>

		    
	</body>
</html><?php }} ?>
