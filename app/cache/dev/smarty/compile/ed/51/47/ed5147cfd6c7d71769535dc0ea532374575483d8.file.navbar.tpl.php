<?php /* Smarty version Smarty-3.1.19, created on 2017-12-08 09:40:21
         compiled from "/Applications/MAMP/htdocs/mim/annebicque/presta_annebi2/modules/welcome/views/navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8124980785a2a4ff519ed18-65897188%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed5147cfd6c7d71769535dc0ea532374575483d8' => 
    array (
      0 => '/Applications/MAMP/htdocs/mim/annebicque/presta_annebi2/modules/welcome/views/navbar.tpl',
      1 => 1512458635,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8124980785a2a4ff519ed18-65897188',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'percent_rounded' => 0,
    'percent_real' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a2a4ff51ae926_21779793',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2a4ff51ae926_21779793')) {function content_5a2a4ff51ae926_21779793($_smarty_tpl) {?>

<div class="onboarding-navbar">
  <div class="row text">
    <div class="col-md-8">
      <?php echo smartyTranslate(array('s'=>'Launch your shop!','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>

    </div>
    <div class="col-md-4 text-right text-md-right"><?php echo $_smarty_tpl->tpl_vars['percent_rounded']->value;?>
%</div>
  </div>
  <div class="progress">
    <div class="bar" role="progressbar" style="width:<?php echo $_smarty_tpl->tpl_vars['percent_real']->value;?>
%;"></div>
  </div>
  <div>
    <button class="btn btn-main btn-sm onboarding-button-resume"><?php echo smartyTranslate(array('s'=>'Resume','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
  </div>
  <div>
    <a class="btn -small btn-main btn-sm onboarding-button-stop"><?php echo smartyTranslate(array('s'=>'Stop the OnBoarding','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</a>
  </div>
</div>
<?php }} ?>
