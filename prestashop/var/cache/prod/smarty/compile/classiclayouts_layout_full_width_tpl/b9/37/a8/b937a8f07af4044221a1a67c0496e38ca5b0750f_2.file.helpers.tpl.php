<?php
/* Smarty version 4.2.1, created on 2023-03-01 13:44:07
  from '/app/prestashop/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63ff489715f667_93388465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b937a8f07af4044221a1a67c0496e38ca5b0750f' => 
    array (
      0 => '/app/prestashop/themes/classic/templates/_partials/helpers.tpl',
      1 => 1677515758,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ff489715f667_93388465 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/app/prestashop/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/b9/37/a8/b937a8f07af4044221a1a67c0496e38ca5b0750f_2.file.helpers.tpl.php',
    'uid' => 'b937a8f07af4044221a1a67c0496e38ca5b0750f',
    'call_name' => 'smarty_template_function_renderLogo_203825127663ff489715d7a1_93776951',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_203825127663ff489715d7a1_93776951 */
if (!function_exists('smarty_template_function_renderLogo_203825127663ff489715d7a1_93776951')) {
function smarty_template_function_renderLogo_203825127663ff489715d7a1_93776951(Smarty_Internal_Template $_smarty_tpl,$params) {
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
/*/ smarty_template_function_renderLogo_203825127663ff489715d7a1_93776951 */
}
