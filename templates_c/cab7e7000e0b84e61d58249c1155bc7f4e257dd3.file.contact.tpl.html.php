<?php /* Smarty version Smarty-3.0.6, created on 2013-08-02 04:40:03
         compiled from "D:\wamp\www\GitHub\pergenproductions/templates/actions/contact.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:2613351fb70633bebf9-76445477%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cab7e7000e0b84e61d58249c1155bc7f4e257dd3' => 
    array (
      0 => 'D:\\wamp\\www\\GitHub\\pergenproductions/templates/actions/contact.tpl.html',
      1 => 1375432765,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2613351fb70633bebf9-76445477',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<section class="content-section">
			<section id="contact-section" class="box clearfix">
				<div class="wp">
					<hgroup id="page-title">
						<h2>Contact Us</h2>
						<p>We would love to hear from you. Feel free to call or email our office with any questions.</p>
						<nav class="breadcrumb">
							<a href="<?php echo $_smarty_tpl->getVariable('SiteData')->value['urls']['site']['homepage'];?>
">Home</a> &rsaquo;
							<span >Contact Us</span>
						</nav>
					</hgroup>
					<section class="contact-content">
						<section id="map">	
							<a class="find-us" href="<?php echo $_smarty_tpl->getVariable('SiteData')->value['urls']['external']['gmap'];?>
">Find us on google map</a>
							<div>
								<div id="map_canvas" style="width:360px; height:296px"></div>
							</div>
						</section>
						<aside>
							<img src="<?php echo $_smarty_tpl->getVariable('imagePath')->value;?>
general/logo-pergen-mini.png" alt="Pergen Productions logo" />
							<p><span class="addr">8206 Leesburg Pike ,Suite 209, Vienna, VA 22182</span></p>
							<p><span class="tel">202-596-2542</span><span class="fax">703-542-1274</span></p>
							<p><a class="mail-to" href="mailto:<?php echo $_smarty_tpl->getVariable('SiteData')->value['urls']['globalUrl']['email'];?>
"><?php echo $_smarty_tpl->getVariable('SiteData')->value['urls']['globalUrl']['email'];?>
</a></p>
							<nav id="contact-socials">
								<ul>
									<li><a class="fb" href="<?php echo $_smarty_tpl->getVariable('SiteData')->value['urls']['external']['facebook'];?>
"></a></li>
									<!--<li><a class="tw" href="javascript:void(0)"></a></li>-->
								</ul>
							</nav>
						</aside>
					</section>
				</div>
			</section>
		</section> <!-- end of CONTENT section-->