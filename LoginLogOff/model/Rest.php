<?php

    class fuentesGoogle{
        
        public static function buscarFuentesPorId($id){
            $key = 'AIzaSyCTEetkf36B74CBhNHVH253nTXcEPcgmIk ';
            
            $json = file_get_contents('https://www.googleapis.com/webfonts/v1/webfonts?key='.$key);
            
        }  
    }

?>

