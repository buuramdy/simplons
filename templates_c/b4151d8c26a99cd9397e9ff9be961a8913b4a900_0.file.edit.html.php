<?php
/* Smarty version 3.1.30, created on 2018-05-22 13:47:01
  from "/var/www/html/Projets/ProjetSamane/view/categorie/edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b041f556d5701_64080050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4151d8c26a99cd9397e9ff9be961a8913b4a900' => 
    array (
      0 => '/var/www/html/Projets/ProjetSamane/view/categorie/edit.html',
      1 => 1526996812,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b041f556d5701_64080050 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>page get id</title>
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
					<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Categorie/update">
						<div class="form-group">
							<label class="control-label">ID de la categorie</label>
							<input class="form-control" type="text" name="idC" id="id" value="<?php if (isset($_smarty_tpl->tpl_vars['categorie']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['categorie']->value['idC'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<label class="control-label">Libelle Categorie</label>
							<input class="form-control" type="text" name="libC" id="valeur1" value="<?php if (isset($_smarty_tpl->tpl_vars['categorie']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['categorie']->value['libC'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<input class="btn btn-success" type="submit" name="modifier" value="Modifier"/>
							<a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Categorie/liste">Retour</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
<?php }
}
