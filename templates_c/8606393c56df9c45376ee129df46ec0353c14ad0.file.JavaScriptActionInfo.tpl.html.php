<?php /* Smarty version Smarty-3.0.6, created on 2013-08-04 11:35:47
         compiled from "D:\wamp\www\GitHub\pergenproductions/templates/_settings/JavaScriptActionInfo.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:3030051fe74d36c9778-99764650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8606393c56df9c45376ee129df46ec0353c14ad0' => 
    array (
      0 => 'D:\\wamp\\www\\GitHub\\pergenproductions/templates/_settings/JavaScriptActionInfo.tpl.html',
      1 => 1375630541,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3030051fe74d36c9778-99764650',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script>window.jQuery || document.write('<script src="<?php echo $_smarty_tpl->getVariable('javascriptLibraryPath')->value;?>
jquery/jquery-1.9.1.min.js">\x3C/script>')</script>
<?php if (count($_smarty_tpl->getVariable('javascriptLibraryIncludes')->value)>0){?>
<?php  $_smarty_tpl->tpl_vars['javascriptLibraryInclude'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('javascriptLibraryIncludes')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['javascriptLibraryInclude']->key => $_smarty_tpl->tpl_vars['javascriptLibraryInclude']->value){
?>
<script type = "text/javascript" language = "javascript"  src ="<?php echo $_smarty_tpl->getVariable('javascriptLibraryPath')->value;?>
<?php echo $_smarty_tpl->tpl_vars['javascriptLibraryInclude']->value;?>
"></script>
<?php }} ?>
<?php }?>
<?php if (count($_smarty_tpl->getVariable('javascriptExternal')->value)>0){?>
<?php  $_smarty_tpl->tpl_vars['javascriptExternalItem'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('javascriptExternal')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['javascriptExternalItem']->key => $_smarty_tpl->tpl_vars['javascriptExternalItem']->value){
?>
<script type = "text/javascript" language = "javascript"  src ="<?php echo $_smarty_tpl->tpl_vars['javascriptExternalItem']->value;?>
"></script>
<?php }} ?>
<?php }?>
<?php if ($_smarty_tpl->getVariable('javaScriptActionInfo')->value){?>
<script  type = "text/javascript" language = "javascript"> var MBOX = <?php echo $_smarty_tpl->getVariable('javaScriptActionInfo')->value;?>
;</script>
<script type = "text/javascript" language = "javascript" src = "<?php echo $_smarty_tpl->getVariable('applicationPath')->value;?>
mbox/javascript/mbox.js" ></script>
<?php }?>
<?php if ($_smarty_tpl->getVariable('javascriptInline')->value){?>
<script type = "text/javascript" language = "javascript" ><?php echo $_smarty_tpl->getVariable('javascriptInline')->value;?>
</script>
<?php }?>
<?php if (count($_smarty_tpl->getVariable('javascriptIncludes')->value)>0){?>
<?php  $_smarty_tpl->tpl_vars['javascriptInclude'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('javascriptIncludes')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['javascriptInclude']->key => $_smarty_tpl->tpl_vars['javascriptInclude']->value){
?>
<script type = "text/javascript" language = "javascript"  src ="<?php echo $_smarty_tpl->getVariable('javascriptPath')->value;?>
<?php echo $_smarty_tpl->tpl_vars['javascriptInclude']->value;?>
"></script>
<?php }} ?>
<?php }?>