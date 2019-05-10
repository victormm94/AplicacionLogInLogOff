<?php

class paisIP {

    public static function nacionalidadIP($ip) {
        $jsonIP = file_get_contents('https://api.ip2country.info/ip?' . $ip);
        $paisIP = json_decode($jsonIP, true);

        $consulta = 'Codigo del Pais: ' . $paisIP['countryCode'] . '<br>' .
                'Codigo del Pais 3 letras: ' . $paisIP['countryCode3'] . '<br>' .
                'Nombre del Pais: ' . $paisIP['countryName'] . '<br>' .
                'Emoji: ' . $paisIP['countryEmoji'];

        return $consulta;
    }
}
?>

