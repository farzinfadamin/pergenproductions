<?php /* Smarty version Smarty-3.0.6, created on 2013-08-01 05:49:39
         compiled from "D:\wamp\www\GitHub\pergenproductions/templates/includes/header.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:371351fa2f33930102-42369727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5648126bf84d5e7c687cbeeeb198786c586ae950' => 
    array (
      0 => 'D:\\wamp\\www\\GitHub\\pergenproductions/templates/includes/header.tpl.html',
      1 => 1375350241,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '371351fa2f33930102-42369727',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<header id="header">
			<h1 id="logo"><a href="<?php echo $_smarty_tpl->getVariable('applicationPath')->value;?>
"></a></h1>
			<nav id="main-menu">
				<ul>
					<li><a href="<?php echo $_smarty_tpl->getVariable('applicationPath')->value;?>
">Home</a></li>
					<li><a href="<?php echo $_smarty_tpl->getVariable('SiteData')->value['urls']['site']['services'];?>
">Services</a></li>
					<li><a href="<?php echo $_smarty_tpl->getVariable('SiteData')->value['urls']['site']['portfolio'];?>
">Portfolio</a></li>
					<li><a href="<?php echo $_smarty_tpl->getVariable('SiteData')->value['urls']['site']['testimonials'];?>
">Testimonials</a></li>
					<li><a href="<?php echo $_smarty_tpl->getVariable('SiteData')->value['urls']['site']['events'];?>
">Events</a></li>
					<li><a href="<?php echo $_smarty_tpl->getVariable('SiteData')->value['urls']['site']['about'];?>
">About us</a></li>
					<li><a href="<?php echo $_smarty_tpl->getVariable('SiteData')->value['urls']['site']['contact'];?>
">Contact us</a></li>
				</ul>
			</nav>
		</header>