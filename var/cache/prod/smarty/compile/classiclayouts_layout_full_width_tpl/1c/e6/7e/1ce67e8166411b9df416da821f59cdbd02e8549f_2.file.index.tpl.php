<?php
/* Smarty version 4.3.1, created on 2023-11-13 10:35:47
  from '/home/isma69/webapps/ismael-prestashop/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6551edf3f2a612_56242009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ce67e8166411b9df416da821f59cdbd02e8549f' => 
    array (
      0 => '/home/isma69/webapps/ismael-prestashop/themes/classic/templates/index.tpl',
      1 => 1699866691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6551edf3f2a612_56242009 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15404611006551edf3f27a44_30718180', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_480742466551edf3f28061_41207064 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_15890057886551edf3f28ec8_24427553 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_13383351036551edf3f28a10_98483478 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15890057886551edf3f28ec8_24427553', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_15404611006551edf3f27a44_30718180 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_15404611006551edf3f27a44_30718180',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_480742466551edf3f28061_41207064',
  ),
  'page_content' => 
  array (
    0 => 'Block_13383351036551edf3f28a10_98483478',
  ),
  'hook_home' => 
  array (
    0 => 'Block_15890057886551edf3f28ec8_24427553',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_480742466551edf3f28061_41207064', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13383351036551edf3f28a10_98483478', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
