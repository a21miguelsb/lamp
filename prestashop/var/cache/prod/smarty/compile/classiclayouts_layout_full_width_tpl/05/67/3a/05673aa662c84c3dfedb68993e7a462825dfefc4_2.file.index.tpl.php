<?php
/* Smarty version 4.2.1, created on 2023-02-16 09:57:56
  from '/app/prestashop/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63edf014ab4657_42247368',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05673aa662c84c3dfedb68993e7a462825dfefc4' => 
    array (
      0 => '/app/prestashop/themes/classic/templates/index.tpl',
      1 => 1676537567,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63edf014ab4657_42247368 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_179678087463edf014ab3030_17512019', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_135892598763edf014ab3334_22350274 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_45219124763edf014ab3af7_62399149 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_115754976263edf014ab37e3_90804285 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_45219124763edf014ab3af7_62399149', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_179678087463edf014ab3030_17512019 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_179678087463edf014ab3030_17512019',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_135892598763edf014ab3334_22350274',
  ),
  'page_content' => 
  array (
    0 => 'Block_115754976263edf014ab37e3_90804285',
  ),
  'hook_home' => 
  array (
    0 => 'Block_45219124763edf014ab3af7_62399149',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_135892598763edf014ab3334_22350274', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115754976263edf014ab37e3_90804285', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
