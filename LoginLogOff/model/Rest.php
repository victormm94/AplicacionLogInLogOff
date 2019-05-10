<?php

class Rest {

    public static function nacionalidadIP($ip) {
        $jsonIP = file_get_contents('https://api.ip2country.info/ip?' . $ip);
        $paisIP = json_decode($jsonIP, true);

        $consulta = 'Codigo del Pais: ' . $paisIP['countryCode'] . '<br>' .
                'Codigo del Pais 3 letras: ' . $paisIP['countryCode3'] . '<br>' .
                'Nombre del Pais: ' . $paisIP['countryName'] . '<br>' .
                'Emoji: ' . $paisIP['countryEmoji'];

        return $consulta;
    }

    public static function aemet($estacion) {
        $key = 'eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ2aWN0b3J4dWJpQGhvdG1haWwuY29tIiwianRpIjoiYTY1ZTk3YzAtZTg5ZS00NDVmLWE5NGYtMTQ0MDQ5MjQ2ZWRhIiwiaXNzIjoiQUVNRVQiLCJpYXQiOjE1NTc0NzY3NTYsInVzZXJJZCI6ImE2NWU5N2MwLWU4OWUtNDQ1Zi1hOTRmLTE0NDA0OTI0NmVkYSIsInJvbGUiOiIifQ.lOdjfh0YHQvkhsFB6lJc2oQZRLPr886cPawFI0k0ynY';
        $jsonEstacion = file_get_contents('https://opendata.aemet.es/opendata/api/valores/climatologicos/inventarioestaciones/estaciones/' . $estacion . '/?api_key=' . $key);
        $estacionJson = json_decode($jsonEstacion, true);

        $jsonEstacion2 = file_get_contents($estacionJson['datos']);
        $estacionJson2 = json_decode($jsonEstacion2, true);

        $contador = count($estacionJson2);
        return $estacionJson2[$contador - 1];
        //$consulta = 'Latitud: '.$estacionJson2['latitud'];
        //return $consulta;
        
    }

}
?>

