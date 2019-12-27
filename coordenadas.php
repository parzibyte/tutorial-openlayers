<?php
if (empty($_GET["categoria"])) {
    exit("No hay categoría");
}

$categoria = $_GET["categoria"];
#TODO: hacerlo en una BD
$veterinarias = [
    [
        "latitud" => 19.419617,
        "longitud" => -99.121051,
    ],
    [
        "latitud" => 19.418919,
        "longitud" => -99.134218,
    ],
    [
        "latitud" => 19.411699,
        "longitud" => -99.127711,
    ],
];
$pizzerias = [
    [
        "latitud" => 19.413955,
        "longitud" => -99.115889,
    ],
    [
        "latitud" => 19.413858,
        "longitud" => -99.138855,
    ],
    [
        "latitud" => 19.421102,
        "longitud" => -99.126836,
    ],
];

if ($categoria === "veterinarias") {
    echo json_encode([
        "icono" => "veterinaria.png",
        "coordenadas" => $veterinarias,
    ]);
} else {
    echo json_encode([
        "icono" => "pizza.png",
        "coordenadas" => $pizzerias,
    ]);
}
