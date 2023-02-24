<?php
/* Smarty version 4.2.1, created on 2023-02-16 09:58:50
  from '/app/prestashop/themes/classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63edf04a4f63b4_10212327',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d3ec3207f7bc344b4bf309a63539ef72bf85a72' => 
    array (
      0 => '/app/prestashop/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1676537567,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63edf04a4f63b4_10212327 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info js-product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
