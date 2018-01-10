<?php /* Smarty version Smarty-3.1.19, created on 2018-01-10 08:24:24
         compiled from "modules/da_commentaires/views/templates/hook/da_commentaires.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4928457785a55bfa85ea3c4-32169845%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea1c3088776a135eceaf89811ca6622c3ba048cd' => 
    array (
      0 => 'modules/da_commentaires/views/templates/hook/da_commentaires.tpl',
      1 => 1515569041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4928457785a55bfa85ea3c4-32169845',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'da_commentaires_name' => 0,
    'da_commentaires_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a55bfa8645787_51197097',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a55bfa8645787_51197097')) {function content_5a55bfa8645787_51197097($_smarty_tpl) {?><div id="dacommentaires_block_home" class="block-da-commentaires">
    <h4>Welcome!</h4>
    <div class="block_content">
        <p><?php echo smartyTranslate(array('s'=>'Hello !','mod'=>'da_commentaires'),$_smarty_tpl);?>
,
            <?php if (isset($_smarty_tpl->tpl_vars['da_commentaires_name']->value)&&$_smarty_tpl->tpl_vars['da_commentaires_name']->value) {?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['da_commentaires_name']->value, ENT_QUOTES, 'UTF-8');?>

            <?php } else { ?>
                World
            <?php }?>
            !
        </p>
        <ul>
            <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['da_commentaires_link']->value, ENT_QUOTES, 'UTF-8');?>
" title="Click this link"><?php echo smartyTranslate(array('s'=>'Click Me !','mod'=>'da_commentaires'),$_smarty_tpl);?>
</a></li>
        </ul>
    </div>
</div><?php }} ?>
