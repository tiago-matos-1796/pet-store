<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-01-17 16:42:00
         compiled from "/users/a52888/public_html/EXAME/application/views/templates/friends_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15318278725c4096ffd58213-41858116%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d0ebf20723c4eb67ae6c4947751818d2431f3bc' => 
    array (
      0 => '/users/a52888/public_html/EXAME/application/views/templates/friends_template.tpl',
      1 => 1547743311,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15318278725c4096ffd58213-41858116',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5c4096ffdb93d3_86088310',
  'variables' => 
  array (
    'image_url' => 0,
    'session_id' => 0,
    'friends' => 0,
    'friend' => 0,
    'users' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4096ffdb93d3_86088310')) {function content_5c4096ffdb93d3_86088310($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<title>Friends</title>
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
 <a href="/~a52888/index.php/blog/index" class="selected">home</a>
</div>
<div class="w3-half" style="text-align:right;">
 <a href="/~a52888/index.php/blog/logout">logout</a> 	 Welcome
</div>

</header>


</br>

<div class="w3-container">
  <h2>Friends</h2>
</div>
<h1><?php echo $_smarty_tpl->tpl_vars['session_id']->value;?>
</h1>
<div class="w3-row">
  <div class="w3-container w3-half ">
    <div class="w3-card-4">
	    <header class="w3-container w3-blue">
          <h3>Friends (click to unfriend!)</h3>
       </header>
	 <?php  $_smarty_tpl->tpl_vars['friend'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['friend']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['friends']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['friend']->key => $_smarty_tpl->tpl_vars['friend']->value) {
$_smarty_tpl->tpl_vars['friend']->_loop = true;
?>
					<p><a href="/~a52888/index.php/blog/unfriend/<?php echo $_smarty_tpl->tpl_vars['friend']->value['friend_user_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['friend']->value['name'];?>
(<?php echo $_smarty_tpl->tpl_vars['friend']->value['email'];?>
)</a></p>
          <?php } ?>
			</div>
  </div>
  <div class="w3-container w3-half ">
	<div class="w3-card-4">
	   <header class="w3-container w3-blue">
			<h3>Users (click to make friend!)</h3> 
       </header>
      <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
			<p><a href="/~a52888/index.php/blog/makefriend/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
(<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
)</a></p>
      <form class="hidden" method="post" action="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"></form>
      <?php } ?>
    	</div>
  </div>
</div>


<br />
<br />

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
