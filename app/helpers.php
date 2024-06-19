<?php
    function setActivo($ruta){
        return request()->routeIs($ruta) ? 'encabezadON' : 'encabezadOFF';
    }
?>
