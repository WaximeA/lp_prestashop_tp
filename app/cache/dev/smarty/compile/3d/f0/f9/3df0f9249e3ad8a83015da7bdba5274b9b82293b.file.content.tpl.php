<?php /* Smarty version Smarty-3.1.19, created on 2017-12-08 09:40:20
         compiled from "/Applications/MAMP/htdocs/mim/annebicque/presta_annebi2/admin859nvwriw/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18670257115a2a4ff4d0d051-62269116%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3df0f9249e3ad8a83015da7bdba5274b9b82293b' => 
    array (
      0 => '/Applications/MAMP/htdocs/mim/annebicque/presta_annebi2/admin859nvwriw/themes/default/template/content.tpl',
      1 => 1512458629,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18670257115a2a4ff4d0d051-62269116',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a2a4ff4d14827_98969776',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2a4ff4d14827_98969776')) {function content_5a2a4ff4d14827_98969776($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
