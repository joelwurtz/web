<?php
require_once '../../include/prepend.inc.php';

require_once AFUP_CHEMIN_RACINE . 'classes/afup/AFUP_Inscriptions_Forum.php';
$inscriptions = new AFUP_Inscriptions_Forum($bdd);
$inscriptions->modifierEtatInscription($_GET['cmd'], AFUP_FORUM_ETAT_REGLE);
$inscriptions->enregistrerInformationsTransaction($_GET['cmd'], $_GET['autorisation'], $_GET['transaction']);

$smarty->display('paybox_effectue.html');
?>