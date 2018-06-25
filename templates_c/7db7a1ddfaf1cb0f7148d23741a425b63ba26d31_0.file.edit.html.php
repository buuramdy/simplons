<?php
/* Smarty version 3.1.30, created on 2018-06-01 14:49:11
  from "/var/www/html/Projets/ProjetSamane/view/produit/edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b115ce7e23a49_37737700',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7db7a1ddfaf1cb0f7148d23741a425b63ba26d31' => 
    array (
      0 => '/var/www/html/Projets/ProjetSamane/view/produit/edit.html',
      1 => 1527000471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b115ce7e23a49_37737700 (Smarty_Internal_Template $_smarty_tpl) {
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
Produit/update">
						<div class="form-group">
							<label class="control-label">ID du Produit</label>
							<input class="form-control" type="text" readonly name="idC" id="id" value="<?php if (isset($_smarty_tpl->tpl_vars['produit']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['produit']->value['id'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<label class="control-label">Reference Produit</label>
							<input class="form-control" type="text" name="refP" id="refP" value="<?php if (isset($_smarty_tpl->tpl_vars['produit']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['produit']->value['refP'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<label class="control-label">Libelle Produit</label>
							<input class="form-control" type="text" name="libP" id="libP" value="<?php if (isset($_smarty_tpl->tpl_vars['produit']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['produit']->value['libP'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<label class="control-label">Stock</label>
							<input class="form-control" type="text" name="qtStock" id="qtStock" value="<?php if (isset($_smarty_tpl->tpl_vars['produit']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['produit']->value['qtStock'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<input class="btn btn-success" type="submit" name="modifier" value="Modifier"/>
							<a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Produit/liste">Retour</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
<?php }
}
