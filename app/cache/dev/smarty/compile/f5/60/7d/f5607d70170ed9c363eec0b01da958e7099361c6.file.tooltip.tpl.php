<?php /* Smarty version Smarty-3.1.19, created on 2017-12-08 09:40:21
         compiled from "/Applications/MAMP/htdocs/mim/annebicque/presta_annebi2/modules/welcome/views/templates/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2986916825a2a4ff51d67e8-54292290%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5607d70170ed9c363eec0b01da958e7099361c6' => 
    array (
      0 => '/Applications/MAMP/htdocs/mim/annebicque/presta_annebi2/modules/welcome/views/templates/tooltip.tpl',
      1 => 1512458635,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2986916825a2a4ff51d67e8-54292290',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a2a4ff51dcb37_32063182',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2a4ff51dcb37_32063182')) {function content_5a2a4ff51dcb37_32063182($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>
