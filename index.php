<?php
$tab = array(1,2,3);

for($i = 0; $i < sizeof($tab); $i++){
    echo $tab[$i];
    echo "<br/>";
}

$tab = ["coucou","les","amis"];
foreach($tab as $value){
    echo $value." ";
    echo "<br/>";
}

echo "<br>";

$tab = [
    "debut" => "il était une fois...",
    "fin" => "voila c'est fini"
];

foreach($tab as $key => $value){
    echo"$key => $value<br>";
}