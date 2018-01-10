<?php /* Smarty version Smarty-3.1.19, created on 2018-01-10 08:12:26
         compiled from "modules/sidemessage/views/templates/hook/sidemessage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4481985775a55bcdae1e007-45232721%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2ec351cd1cb2025e2da5cf8f951619b39048a99' => 
    array (
      0 => 'modules/sidemessage/views/templates/hook/sidemessage.tpl',
      1 => 1512717498,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4481985775a55bcdae1e007-45232721',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sidemessage' => 0,
    'sidemessage_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a55bcdae2cca7_93732131',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a55bcdae2cca7_93732131')) {function content_5a55bcdae2cca7_93732131($_smarty_tpl) {?><div id="sidemessage-module" class="block">
    <h4><?php echo smartyTranslate(array('s'=>'Welcome !','mod'=>'sidemessage'),$_smarty_tpl);?>
</h4>
    <div class="block_content">
        <p>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sidemessage']->value, ENT_QUOTES, 'UTF-8');?>

        </p>

        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sidemessage_link']->value, ENT_QUOTES, 'UTF-8');?>
" title="Click this link">Click me!</a>
    </div>
</div><?php }} ?>
