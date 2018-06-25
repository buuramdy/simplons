<?php
/* Smarty version 3.1.30, created on 2018-05-22 13:29:27
  from "/var/www/html/Projets/ProjetSamane/view/produit/add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b041b378c95d5_79656872',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '901e8a214803e78e45ad03ad14831bf338503204' => 
    array (
      0 => '/var/www/html/Projets/ProjetSamane/view/produit/add.html',
      1 => 1526995750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b041b378c95d5_79656872 (Smarty_Internal_Template $_smarty_tpl) {
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
					<?php if (isset($_smarty_tpl->tpl_vars['ok']->value)) {?>
						<?php if ($_smarty_tpl->tpl_vars['ok']->value != 0) {?>
							<div class="alert alert-success">Données ajoutées!</div>
						<?php } else { ?>
							<div class="alert alert-danger">Erreur!</div>
						<?php }?>
					<?php }?>
					<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Produit/add">
						<div class="form-group">
							<label class="control-label">Reference Produit</label>
							<input class="form-control" type="text" name="libP" id="valeur1"/>
						</div>
						<div class="form-group">
							<label class="control-label">Libelle Produit</label>
							<input class="form-control" type="text" name="libP" id="valeur1"/>
						</div>
						<div class="form-group">
							<label class="control-label">Stock</label>
							<input class="form-control" type="text" name="libP" id="valeur1"/>
						</div>
						<div class="form-group">
							<label class="control-label">Categorie</label>
							<input class="form-control" type="text" name="libP" id="valeur1"/>
						</div>
						<div class="form-group">
							<input class="btn btn-success" type="submit" name="valider" value="ENvoyer"/>
							<input class="btn btn-danger" type="reset" name="annuler" value="Annuler"/>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
<?php }
}
