<?php
$naam = $_GET['naam'];
$achtergrondkleur = $_GET['achtergrondkleur'];

setcookie("naam", $naam, time() + 24 * 60 *60);
setcookie("achtergrondkleur", $achtergrondkleur, time() + 24 * 60 *60);

require_once('toon.php');
