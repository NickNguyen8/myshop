<?php
/* Smarty version 3.1.32, created on 2018-10-25 14:34:19
  from 'C:\wamp64\www\ecoshop.vn\admin88\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd171fb045b32_85419913',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a16523a592dae394e2e01a9741bfdc15d5ba624a' => 
    array (
      0 => 'C:\\wamp64\\www\\ecoshop.vn\\admin88\\themes\\default\\template\\content.tpl',
      1 => 1540450942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd171fb045b32_85419913 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
