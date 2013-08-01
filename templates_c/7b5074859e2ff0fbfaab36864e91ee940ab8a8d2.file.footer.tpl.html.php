<?php /* Smarty version Smarty-3.0.6, created on 2013-08-01 07:52:21
         compiled from "D:\wamp\www\GitHub\pergenproductions/templates/includes/footer.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:3221451fa4bf528d243-49043705%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b5074859e2ff0fbfaab36864e91ee940ab8a8d2' => 
    array (
      0 => 'D:\\wamp\\www\\GitHub\\pergenproductions/templates/includes/footer.tpl.html',
      1 => 1375357938,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3221451fa4bf528d243-49043705',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<footer id="footer">
			<div class="footer-wrap">
				<aside>
					<nav id="footer-links">
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
					<p>Copyright &copy; 2012 Pergen Productions. All rights reserved.</p>
					<p class="copyright"><label>Designed by</label><a class="mexo" href="<?php echo $_smarty_tpl->getVariable('SiteData')->value['urls']['external']['mexoinc'];?>
"></a><a class="curlybit" href="<?php echo $_smarty_tpl->getVariable('SiteData')->value['urls']['external']['curlybit'];?>
"></a></p>
				</aside>
				<section>
					<p>Address: <?php echo $_smarty_tpl->getVariable('SiteData')->value['urls']['globalUrl']['address'];?>
</p>
					<p>Phone: <?php echo $_smarty_tpl->getVariable('SiteData')->value['urls']['globalUrl']['tel_number'];?>
 | Fax: <?php echo $_smarty_tpl->getVariable('SiteData')->value['urls']['globalUrl']['fax_number'];?>
</p>
					<nav id="footer-socials">
						<a class="fb" href="<?php echo $_smarty_tpl->getVariable('SiteData')->value['urls']['external']['facebook'];?>
"></a>
						<!--<a class="tw" href="javascript:void(0)"></a>-->
					</nav>
				</section>
			</div>
		</footer>