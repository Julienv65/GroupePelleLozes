<?php /* Smarty version 3.1.27, created on 2015-12-15 02:04:05
         compiled from "C:\Bitnami\wampstack-5.6.15-0\apache2\htdocs\GroupePelleLozes\AdopUnGeek\views\accueil.smarty.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:22813566fe595dfe371_69244296%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16c46b29e8a0f18de0d7a675bb38db9f5eaba275' => 
    array (
      0 => 'C:\\Bitnami\\wampstack-5.6.15-0\\apache2\\htdocs\\GroupePelleLozes\\AdopUnGeek\\views\\accueil.smarty.tpl',
      1 => 1449932801,
      2 => 'file',
    ),
    'e6047072256c9826195f58f734b6f80d256e2970' => 
    array (
      0 => 'C:\\Bitnami\\wampstack-5.6.15-0\\apache2\\htdocs\\GroupePelleLozes\\AdopUnGeek\\views\\template.smarty.tpl',
      1 => 1450173816,
      2 => 'file',
    ),
    '3cc9ba3f5fc91feb6e225edea562cdb7f43dc840' => 
    array (
      0 => '3cc9ba3f5fc91feb6e225edea562cdb7f43dc840',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '22813566fe595dfe371_69244296',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_566fe595e21878_21529561',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_566fe595e21878_21529561')) {
function content_566fe595e21878_21529561 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '22813566fe595dfe371_69244296';
?>
<!DOCTYPE html>

<html lang="fr">


<head>
    <title>Header Mode</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="views/style.css" rel="stylesheet" type="text/css" />
    <link rel="Shortcut Icon" href="Photos/AdopteUnGeek.png">
</head>
<body>

<header>

    <div class="entetelogo"><a href="accueil.html"><img src="photos/AdopteUnGeek.png" alt="logo"></a></div>

    <ul id="nav">
	<li><a href="accueil.html">Accueil</a></li>
	<li><a href="inscription.html">Inscription</a></li>

        <li>
            <form id="search" method="post">
                <input class="search_data" name="saisie" type="text" placeholder="Secteur recherché ?" required />
                <input class="btn-left-loupe" name="go" type="submit" value="" />
            </form>
        </li>
    </ul>

    <h1 class="foot">
        <!-- Copyright  date("Y"); <?php echo '?>';?>, Tout droit reserves!-->
    </h1>

    </div>

</header>

<main>
<?php
$_smarty_tpl->properties['nocache_hash'] = '22813566fe595dfe371_69244296';
?>

    <p>accueil</p>

</main>

</body><?php }
}
?>