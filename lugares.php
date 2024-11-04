<?php
//Creamos una lista aparte para poder manejarla facilmente con include en distintas páginas
$lugares = [
    "España" => ['Lugo', 'Madrid', 'Barcelona', 'Cáceres', 'Murcia'],
    "México" => ['Ciudad de México', 'Guadalajara', 'Monterrey', 'Puebla', 'Cancún'],
    "Argentina" => ['Buenos Aires', 'Córdoba', 'Rosario', 'Mendoza', 'La Plata'],
    "Brasil" => ['São Paulo', 'Río de Janeiro', 'Salvador', 'Brasilia', 'Fortaleza'],
    "Colombia" => ['Bogotá', 'Medellín', 'Cali', 'Barranquilla', 'Cartagena'],
    "Estados Unidos" => ['Nueva York', 'Los Ángeles', 'Chicago', 'Houston', 'Phoenix'],
    "Francia" => ['París', 'Marsella', 'Lyon', 'Toulouse', 'Niza'],
    "Italia" => ['Roma', 'Milán', 'Nápoles', 'Turín', 'Palermo'],
    "Alemania" => ['Berlín', 'Múnich', 'Hamburgo', 'Colonia', 'Fráncfort'],
    "Reino Unido" => ['Londres', 'Manchester', 'Birmingham', 'Edimburgo', 'Liverpool'],
    "Japón" => ['Tokio', 'Kioto', 'Osaka', 'Yokohama', 'Nagoya'],
    "China" => ['Pekín', 'Shanghái', 'Guangzhou', 'Shenzhen', 'Chengdu'],
    "Australia" => ['Sídney', 'Melbourne', 'Brisbane', 'Perth', 'Adelaida']
];

//Nuevo array solo para obtener los paises
$paises = array_keys($lugares);
?>