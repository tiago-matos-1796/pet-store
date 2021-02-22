<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-01-16 12:56:09
         compiled from "/users/a999998/public_html/exame/application/views/templates/register_success.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12699147275c3f29e97646d0-40263232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5c41d1e12e963e2545cf55641f69fa30e235e33' => 
    array (
      0 => '/users/a999998/public_html/exame/application/views/templates/register_success.tpl',
      1 => 1547642466,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12699147275c3f29e97646d0-40263232',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'index_url' => 0,
    'image_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5c3f29e9783f87_43017469',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c3f29e9783f87_43017469')) {function content_5c3f29e9783f87_43017469($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
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
		  <img src="<?php echo $_smarty_tpl->tpl_vars['image_url']->value;?>
" >
		</div>

  		<div class="w3-card-12 w3-yellow"  >	

				
			<h2 style="text-align:center;">Novo utilizador registado com sucesso!</h2>
			 
			
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
