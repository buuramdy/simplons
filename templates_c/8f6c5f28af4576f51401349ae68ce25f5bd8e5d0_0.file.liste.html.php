<?php
/* Smarty version 3.1.30, created on 2018-05-22 11:25:53
  from "/var/www/html/Projets/ProjetSamane/view/categorie/liste.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b03fe4190d7f3_06501079',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f6c5f28af4576f51401349ae68ce25f5bd8e5d0' => 
    array (
      0 => '/var/www/html/Projets/ProjetSamane/view/categorie/liste.html',
      1 => 1526988305,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b03fe4190d7f3_06501079 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>page liste</title>
		<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>
		<style>
			h1{
				color: #40007d;
			}
		</style>
	</head>
	<body>
		<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/logo.jpg" class="resize" />
		<div class="nav navbar navbar-default navbar-fixed-top">
			<ul class="nav navbar-nav">
				<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/index">Menu page test</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/getID/1">Menu page test 2</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/liste">Menu page test liste</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Categorie/liste">Categorie</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Produit/liste">Produit</a></li>
			</ul>
		</div>
		<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:150px;">
			<div class="panel panel-info">
				<div class="panel-heading">BIENVENUE A VOTRE MODELE MVC</div>
				<div class="panel-body">
					<div class="alert alert-success" style="font-size:18px; text-align:justify;">
						*********Buur Amdy*********
					<br/><b>Back-End Technology</b>
					</div>
					<?php if (isset($_smarty_tpl->tpl_vars['categories']->value)) {?>
						<?php if ($_smarty_tpl->tpl_vars['categories']->value != null) {?>
							<table class="table table-bordered table-stripped">
								<tr>
									<th>ID</th>
									<th>Categorie</th>
									<th>Action</th>
									<th>Action</th>
								</tr>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'categorie');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categorie']->value) {
?>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['categorie']->value['idC'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['categorie']->value['libC'];?>
</td>
										<td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Categorie/delete/<?php echo $_smarty_tpl->tpl_vars['categorie']->value['idC'];?>
">Supprimer</a></td>
										<td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Categorie/edit/<?php echo $_smarty_tpl->tpl_vars['categorie']->value['idC'];?>
">Editer</a></td>
									</tr>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							</table>
						<?php } else { ?>
							Liste vide
						<?php }?>
					<?php }?>
				</div>
				<a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Categorie/add">Ajout d'une Categorie de produit</a>
			</div>
		</div>

	</body>
</html>
<?php }
}
