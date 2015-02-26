<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-26 14:24:06
         compiled from "C:\wamp\www\FilRouge\tpl\pages\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2939754eef683403726-73927119%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f404c0a357f5ab44ed1d9a9abddf9ff1e639522' => 
    array (
      0 => 'C:\\wamp\\www\\FilRouge\\tpl\\pages\\index.tpl',
      1 => 1424956730,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2939754eef683403726-73927119',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54eef683407c17_20353849',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54eef683407c17_20353849')) {function content_54eef683407c17_20353849($_smarty_tpl) {?><div class="content">
    <h1>Accueil</h1>
    <form action="#" method="POST">
        <fieldset>
            <legend>Se connecter</legend>

            <p>
                <label for="nom">Login : </label>
                <input name="nom" id="nom" type="text" placeholder="Votre pseudo"/>
            </p>
            <p>
                <label for="password">Mot de passe : </label>
                <input name="password" id="password" type="password" placeholder="Mot de passe"/>
            </p>
            <p>
                <button type="submit">Se connecter</button>
            </p>

        </fieldset>
    </form>
</div><?php }} ?>
