<!-- Hacer una pagina PHP que contenga una funcion tiempo que recibe 2
parametros, el tiempo que hizo ayer y el tiempo que hace hoy. Hay 3
posibilidades: SOL, NUBLADO, LLUVIA. Y en funcion del tiempo de ayer
y el tiempo de hoy muestre la prediccion para mañana. Esta prediccion se 
basa en la siguiente tabla. -->


<?php

function tiempo($tiempo_ayer,$tiempo_hoy){

    $array_tiempo = [
        [
            "tiempo_ayer" => "AYER",
            "tiempo_hoy"=>"HOY",
            "resultado"=>"MAÑANA"
        ],
        [
            "tiempo_ayer" => "SOL",
            "tiempo_hoy"=>"SOL",
            "resultado"=>"SOL"
        ],
        [
            "tiempo_ayer" => "NUBLADO",
            "tiempo_hoy"=>"NUBLADO",
            "resultado"=>"NUBLADO"
        ],
        [
            "tiempo_ayer" => "LLUVIA",
            "tiempo_hoy"=>"LLUVIA",
            "resultado"=>"LLUVIA"
        ],
        [
            "tiempo_ayer" => "SOL",
            "tiempo_hoy"=>"NUBLADO",
            "resultado"=>"NUBLADO"
        ],
        [
            "tiempo_ayer" => "NUBLADO",
            "tiempo_hoy"=>"SOL",
            "resultado"=>"SOL"
        ],
        [
            "tiempo_ayer" => "SOL",
            "tiempo_hoy"=>"LLUVIA",
            "resultado"=>"NUBLADO"
        ],
        [
            "tiempo_ayer" => "LLUVIA",
            "tiempo_hoy"=>"SOL",
            "resultado"=>"NUBLADO"
        ],
        [
            "tiempo_ayer" => "NUBLADO",
            "tiempo_hoy"=>"LLUVIA",
            "resultado"=>"LLUVIA"
        ],
        [
            "tiempo_ayer" => "LLUVIA",
            "tiempo_hoy"=>"NUBLADO",
            "resultado"=>"NUBLADO"
        ]

    ];
    
    $tiempo_ayer_mayus = strtoupper($tiempo_ayer);
    $tiempo_hoy_mayus = strtoupper($tiempo_hoy);

    for ($i=0; $i < count($array_tiempo); $i++) { 
        if($array_tiempo[$i]["tiempo_ayer"] === $tiempo_ayer_mayus && $array_tiempo[$i]["tiempo_hoy"] === $tiempo_hoy_mayus){
            echo($array_tiempo[$i]['resultado']);
        }
    }

}

echo(tiempo("lluvia","nublado"));