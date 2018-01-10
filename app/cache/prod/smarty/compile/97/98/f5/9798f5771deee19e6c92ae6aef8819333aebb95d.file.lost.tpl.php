<?php /* Smarty version Smarty-3.1.19, created on 2017-12-08 08:16:26
         compiled from "/Applications/MAMP/htdocs/mim/annebicque/presta_annebi2/modules/welcome/views/templates/lost.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5689565035a2a3c4a9078b5-64313380%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9798f5771deee19e6c92ae6aef8819333aebb95d' => 
    array (
      0 => '/Applications/MAMP/htdocs/mim/annebicque/presta_annebi2/modules/welcome/views/templates/lost.tpl',
      1 => 1512458635,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5689565035a2a3c4a9078b5-64313380',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a2a3c4a90fe75_74740708',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2a3c4a90fe75_74740708')) {function content_5a2a3c4a90fe75_74740708($_smarty_tpl) {?>

<div class="onboarding onboarding-popup bootstrap">
  <div class="content">
    <p><?php echo smartyTranslate(array('s'=>'Hey! Are you lost?','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <p><?php echo smartyTranslate(array('s'=>'To continue, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-primary onboarding-button-goto-current"><?php echo smartyTranslate(array('s'=>'Continue','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
    <p><?php echo smartyTranslate(array('s'=>'If you want to stop the tutorial for good, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-alert onboarding-button-stop"><?php echo smartyTranslate(array('s'=>'Quit the Welcome tutorial','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
  </div>
</div>
<?php }} ?>
