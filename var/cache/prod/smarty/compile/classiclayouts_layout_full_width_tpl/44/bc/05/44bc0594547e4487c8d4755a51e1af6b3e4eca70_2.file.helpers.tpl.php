<?php
/* Smarty version 4.3.1, created on 2023-11-13 10:35:48
  from '/home/isma69/webapps/ismael-prestashop/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6551edf403e6e8_27922381',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44bc0594547e4487c8d4755a51e1af6b3e4eca70' => 
    array (
      0 => '/home/isma69/webapps/ismael-prestashop/themes/classic/templates/_partials/helpers.tpl',
      1 => 1699866691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6551edf403e6e8_27922381 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/home/isma69/webapps/ismael-prestashop/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/44/bc/05/44bc0594547e4487c8d4755a51e1af6b3e4eca70_2.file.helpers.tpl.php',
    'uid' => '44bc0594547e4487c8d4755a51e1af6b3e4eca70',
    'call_name' => 'smarty_template_function_renderLogo_1213168746551edf40331c3_43237196',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_1213168746551edf40331c3_43237196 */
if (!function_exists('smarty_template_function_renderLogo_1213168746551edf40331c3_43237196')) {
function smarty_template_function_renderLogo_1213168746551edf40331c3_43237196(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_1213168746551edf40331c3_43237196 */
}
