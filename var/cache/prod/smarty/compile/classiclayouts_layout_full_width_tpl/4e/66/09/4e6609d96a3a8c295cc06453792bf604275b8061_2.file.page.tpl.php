<?php
/* Smarty version 4.3.1, created on 2023-11-13 10:35:47
  from '/home/isma69/webapps/ismael-prestashop/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6551edf3f3f011_53641329',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e6609d96a3a8c295cc06453792bf604275b8061' => 
    array (
      0 => '/home/isma69/webapps/ismael-prestashop/themes/classic/templates/page.tpl',
      1 => 1699866691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6551edf3f3f011_53641329 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9828937956551edf3f34f12_83874065', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_18237781456551edf3f35b24_51228397 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_10963712666551edf3f354a4_35185424 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18237781456551edf3f35b24_51228397', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_13828295426551edf3f3bec9_57702043 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_14293285096551edf3f3c677_52602913 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_18803599556551edf3f3b968_59539763 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13828295426551edf3f3bec9_57702043', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14293285096551edf3f3c677_52602913', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_8097648176551edf3f3db58_50095918 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_19748094506551edf3f3d659_65186763 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8097648176551edf3f3db58_50095918', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_9828937956551edf3f34f12_83874065 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9828937956551edf3f34f12_83874065',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_10963712666551edf3f354a4_35185424',
  ),
  'page_title' => 
  array (
    0 => 'Block_18237781456551edf3f35b24_51228397',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_18803599556551edf3f3b968_59539763',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_13828295426551edf3f3bec9_57702043',
  ),
  'page_content' => 
  array (
    0 => 'Block_14293285096551edf3f3c677_52602913',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_19748094506551edf3f3d659_65186763',
  ),
  'page_footer' => 
  array (
    0 => 'Block_8097648176551edf3f3db58_50095918',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10963712666551edf3f354a4_35185424', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18803599556551edf3f3b968_59539763', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19748094506551edf3f3d659_65186763', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
