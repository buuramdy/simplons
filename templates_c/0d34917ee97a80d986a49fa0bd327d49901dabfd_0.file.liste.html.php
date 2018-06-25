<?php
/* Smarty version 3.1.30, created on 2018-05-22 13:36:34
  from "/var/www/html/Projets/ProjetSamane/view/produit/liste.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b041ce2acb438_05529640',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d34917ee97a80d986a49fa0bd327d49901dabfd' => 
    array (
      0 => '/var/www/html/Projets/ProjetSamane/view/produit/liste.html',
      1 => 1526996015,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b041ce2acb438_05529640 (Smarty_Internal_Template $_smarty_tpl) {
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
					<?php if (isset($_smarty_tpl->tpl_vars['produits']->value)) {?>
						<?php if ($_smarty_tpl->tpl_vars['produits']->value != null) {?>
							<table class="table table-bordered table-stripped">
								<tr>
									<th>ID</th>
									<th>Reference Produit</th>
									<th>Libelle Produit</th>
									<th>Stock</th>
									<th>idC</th>
									<th>Action</th>
									<th>Action</th>
								</tr>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['produits']->value, 'produit');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['produit']->value) {
?>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['produit']->value['id'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['produit']->value['refP'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['produit']->value['libP'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['produit']->value['qtStock'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['produit']->value['idC'];?>
</td>
										<td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Produit/delete/<?php echo $_smarty_tpl->tpl_vars['produit']->value['id'];?>
">Supprimer</a></td>
										<td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Produit/edit/<?php echo $_smarty_tpl->tpl_vars['produit']->value['id'];?>
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
Produit/add">Ajout d'un produit</a>
			</div>
		</div>

	</body>
</html>
<?php }
}
