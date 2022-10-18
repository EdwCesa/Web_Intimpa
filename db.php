<?php
    function conn(){
        $hostname = "localhost";
        $usuariodb = "root";
        $passworddb = "mysql";
        $dbname = "";

            $conectar = mysqli_connect($hostname,$usuariodb,$passworddb,$dbname);
            return $conectar;
    }


?>