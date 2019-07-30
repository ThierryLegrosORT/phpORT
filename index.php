<?php
$tmp = "aujourd'hui";

$monparagraphe = <<<mondelimiteur
Bonjour,
J'espère que tout le monde va bien $tmp.<br/>
quelque chose d'autre.

mondelimiteur;

echo $monparagraphe;