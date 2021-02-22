<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-01-16 12:50:12
         compiled from "/users/a999998/public_html/exame/application/views/templates/index_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11503012075c3dc3f00d11d8-79025532%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '326ab4343122d24a4af33fe16bc8d59d00eae856' => 
    array (
      0 => '/users/a999998/public_html/exame/application/views/templates/index_template.tpl',
      1 => 1547642970,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11503012075c3dc3f00d11d8-79025532',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5c3dc3f0121675_58869009',
  'variables' => 
  array (
    'image_url' => 0,
    'menu1' => 0,
    'menu2' => 0,
    'menu3' => 0,
    'welcome' => 0,
    'blogs' => 0,
    'blog' => 0,
    'session_id' => 0,
    'post_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c3dc3f0121675_58869009')) {function content_5c3dc3f0121675_58869009($_smarty_tpl) {?><!DOCTYPE html>
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
  <img src="<?php echo $_smarty_tpl->tpl_vars['image_url']->value;?>
" >
</div>


<header class="w3-topnav w3-blue">

<div class="w3-half" style="text-align:left;">
 <?php echo $_smarty_tpl->tpl_vars['menu1']->value;?>

</div>
<div class="w3-half" style="text-align:right;">
 <?php echo $_smarty_tpl->tpl_vars['menu2']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['menu3']->value;?>
	 <?php echo $_smarty_tpl->tpl_vars['welcome']->value;?>
 
</div>

</header>


</br>

<?php  $_smarty_tpl->tpl_vars['blog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->key => $_smarty_tpl->tpl_vars['blog']->value) {
$_smarty_tpl->tpl_vars['blog']->_loop = true;
?>
<div class="w3-card-4 ">

<div class="w3-col s8 w3-blue" style="text-align:left;">
  <?php echo $_smarty_tpl->tpl_vars['blog']->value['name'];?>
 
</div>
<div class="w3-col s4 w3-blue" style="text-align:right;">


   	<?php if ($_smarty_tpl->tpl_vars['session_id']->value!=0&&$_smarty_tpl->tpl_vars['session_id']->value==$_smarty_tpl->tpl_vars['blog']->value['user_id']) {?>	
		<a href="<?php echo $_smarty_tpl->tpl_vars['post_url']->value;
echo $_smarty_tpl->tpl_vars['blog']->value['id'];?>
">update post</a> &nbsp;
	<?php } else { ?>
		&nbsp; &nbsp;
	<?php }?>
	

</div>

</br>

<div class="w3-container">
 <p> <?php echo $_smarty_tpl->tpl_vars['blog']->value['content'];?>
 </p>
 
</div>

<div class="w3-col s8 w3-blue" style="text-align:left;">
	updated: <?php echo $_smarty_tpl->tpl_vars['blog']->value['updated_at'];?>
 created: <?php echo $_smarty_tpl->tpl_vars['blog']->value['created_at'];?>

</div>

<div class="w3-col s4 w3-blue" style="text-align:right;">
	&nbsp; &nbsp;	
</div>

</div>

<br />
<br />

<?php } ?>



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
