<?php /* Smarty version Smarty-3.0.6, created on 2013-08-05 03:56:29
         compiled from "D:\wamp\www\GitHub\pergenproductions/templates/actions/portfolio.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:1682451fe93c2cb6312-73077615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e3c2ac581b1fafb05f1575d7ba8dbc75d6f67dc' => 
    array (
      0 => 'D:\\wamp\\www\\GitHub\\pergenproductions/templates/actions/portfolio.tpl.html',
      1 => 1375687904,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1682451fe93c2cb6312-73077615',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('SiteData')->value['portfolio']['gallery']){?>
	<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('includeTemplate')->value).("portfolio-gallery.tpl.html"), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<?php }else{ ?>
<section class="content-section">
	<section class="box clearfix">
		<div class="wp">
			<hgroup id="page-title">
				<h2>Portfolio</h2>
				<nav class="breadcrumb">
					<a href="<?php echo $_smarty_tpl->getVariable('SiteData')->value['urls']['site']['homepage'];?>
">Home</a> &rsaquo;
					<span >Portfolio</span>
				</nav>
			</hgroup>
			<section class="portfolio-content">
				<ul class="gallery-list">
				<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('SiteData')->value['portfolio']['cats']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['cat']->key;
?>
					<li>
	                   <a href="<?php echo $_smarty_tpl->tpl_vars['cat']->value['url'];?>
">
	                   		<h3><span><?php echo $_smarty_tpl->tpl_vars['cat']->value['title'];?>
</span></h3>
	                   		<img src="<?php echo $_smarty_tpl->tpl_vars['cat']->value['imageUrl'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['cat']->value['title'];?>
">
	                   </a>
                   </li>
				<?php }} ?>
				</ul>				
			</section>
		</div>
	</section>
</section> <!-- end of CONTENT section-->				
<?php }?>