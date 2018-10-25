<?php
/* Smarty version 3.1.32, created on 2018-10-25 15:01:01
  from 'C:\wamp64\www\ecoshop.vn\themes\classic\templates\catalog\_partials\product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd1783d4c19f6_08170118',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fde877660bb7aa1d978d97f268653d4195b29a68' => 
    array (
      0 => 'C:\\wamp64\\www\\ecoshop.vn\\themes\\classic\\templates\\catalog\\_partials\\product-additional-info.tpl',
      1 => 1540450948,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd1783d4c19f6_08170118 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
