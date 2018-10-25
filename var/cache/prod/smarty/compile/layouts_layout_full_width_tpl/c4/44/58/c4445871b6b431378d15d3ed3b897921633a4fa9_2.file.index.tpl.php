<?php
/* Smarty version 3.1.32, created on 2018-10-25 14:22:06
  from 'C:\wamp64\www\ecoshop.vn\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd16f1edb1550_24734487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4445871b6b431378d15d3ed3b897921633a4fa9' => 
    array (
      0 => 'C:\\wamp64\\www\\ecoshop.vn\\themes\\classic\\templates\\index.tpl',
      1 => 1540450948,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd16f1edb1550_24734487 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2669411055bd16f1ed81b96_82915980', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_11729273525bd16f1ed892c3_79359787 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_18801358865bd16f1ed9ae86_72522526 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_8994448655bd16f1ed92736_85976414 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18801358865bd16f1ed9ae86_72522526', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_2669411055bd16f1ed81b96_82915980 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_2669411055bd16f1ed81b96_82915980',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_11729273525bd16f1ed892c3_79359787',
  ),
  'page_content' => 
  array (
    0 => 'Block_8994448655bd16f1ed92736_85976414',
  ),
  'hook_home' => 
  array (
    0 => 'Block_18801358865bd16f1ed9ae86_72522526',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11729273525bd16f1ed892c3_79359787', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8994448655bd16f1ed92736_85976414', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
