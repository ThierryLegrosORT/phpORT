<?php

$address = [
    "Sophie" => [
        "street" => "Allée des Embruns",
        "cp" => "33333",
        "city" => "Pétaouchnok-les-Bains"
    ],
    "Jacques" => [
        "street" => "Allée des Embrouilles",
        "cp" => "33332",
        "city" => "Pétaouchnok-City"
    ],
    "Marc" => [
        "street" => "Allée des Noyés",
        "cp" => "32333",
        "city" => "Pétaouchnok"
    ],
    ];

    $ami = [
        "Sophie"=>[
            "name"=>"NoName",
            "age"=>32,
            "address"=>$address["Sophie"]
        ],
        "Marc"=>[
            "name"=>"Namose",
            "age"=>33,
            "address"=>$address["Marc"]
        ],
    ];

    echo "<pre>";
    var_dump($ami["Sophie"]);
    echo "</pre>";