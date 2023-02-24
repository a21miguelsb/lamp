<?php
/* Smarty version 4.2.1, created on 2023-02-16 09:58:04
  from 'module:pscustomeraccountlinkspsc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63edf01cebf859_55363711',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:pscustomeraccountlinkspsc',
      1 => 1676537567,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_63edf01cebf859_55363711 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/app/prestashop/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/b9/37/a8/b937a8f07af4044221a1a67c0496e38ca5b0750f_2.file.helpers.tpl.php',
    'uid' => 'b937a8f07af4044221a1a67c0496e38ca5b0750f',
    'call_name' => 'smarty_template_function_renderLogo_70580524663edf014ac85b6_78339513',
  ),
));
?>
<div id="block_myaccount_infos" class="col-md-3 links wrapper">
  <p class="h3 myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://prestashop.a21miguelsb.dedyn.io/index.php?controller=my-account" rel="nofollow">
      Su cuenta
    </a>
  </p>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Su cuenta</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li><a href="http://prestashop.a21miguelsb.dedyn.io/index.php?controller=guest-tracking" title="Seguimiento del pedido" rel="nofollow">Seguimiento del pedido</a></li>
        <li><a href="http://prestashop.a21miguelsb.dedyn.io/index.php?controller=my-account" title="Acceda a su cuenta de cliente" rel="nofollow">Iniciar sesión</a></li>
        <li><a href="http://prestashop.a21miguelsb.dedyn.io/index.php?controller=registration" title="Crear una cuenta" rel="nofollow">Crear una cuenta</a></li>
        <li>
  <a href="//prestashop.a21miguelsb.dedyn.io/index.php?fc=module&module=ps_emailalerts&controller=account" title="Mis alertas">
    Mis alertas
  </a>
</li>

       
	</ul>
</div>
<?php }
}
