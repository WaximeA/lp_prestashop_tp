<?php /* Smarty version Smarty-3.1.19, created on 2017-12-08 08:35:43
         compiled from "/Applications/MAMP/htdocs/mim/annebicque/presta_annebi2/admin859nvwriw/themes/new-theme/template/components/layout/employee_dropdown.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18131466595a2a40cf47ff19-38130584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2a7a817de222a5cce8e4a26e793719ceaedb1a6' => 
    array (
      0 => '/Applications/MAMP/htdocs/mim/annebicque/presta_annebi2/admin859nvwriw/themes/new-theme/template/components/layout/employee_dropdown.tpl',
      1 => 1512458629,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18131466595a2a40cf47ff19-38130584',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee' => 0,
    'link' => 0,
    'login_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a2a40cf4981b5_56903119',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2a40cf4981b5_56903119')) {function content_5a2a40cf4981b5_56903119($_smarty_tpl) {?>
<div class="employee-dropdown dropdown">
  <?php if (isset($_smarty_tpl->tpl_vars['employee']->value)) {?>
    <div class="img-circle person" data-toggle="dropdown">
      <i class="material-icons">person</i>
    </div>
  <?php }?>
  <div class="dropdown-menu dropdown-menu-right p-a-1 m-r-2">
    <div class="text-xs-center employee_avatar">
      <img class="avatar img-circle" src="<?php echo $_smarty_tpl->tpl_vars['employee']->value->getImage();?>
" /><br>
      <span><?php echo $_smarty_tpl->tpl_vars['employee']->value->firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['employee']->value->lastname;?>
</span>
    </div>
    <hr>
    <a class="employee-link profile-link" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminEmployees'),'html','UTF-8');?>
&amp;id_employee=<?php echo intval($_smarty_tpl->tpl_vars['employee']->value->id);?>
&amp;updateemployee">
      <i class="material-icons">settings_applications</i> <?php echo smartyTranslate(array('s'=>'Your profile'),$_smarty_tpl);?>

    </a>
    <a class="employee-link m-t-1" id="header_logout" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['login_link']->value,'html','UTF-8');?>
&amp;logout">
      <i class="material-icons">power_settings_new</i> <?php echo smartyTranslate(array('s'=>'Sign out'),$_smarty_tpl);?>

    </a>
  </div>
</div>
<?php }} ?>
