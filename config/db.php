<?php
class Connectar{
    public static function connexio(){
        $db_server = "127.0.0.1";
        $db_database = "miBase1";
        $db_password = "root";
        $db_user = "root";
        $db_port = 3306;
    
        $connexio=new mysqli($db_server,$db_user,  $db_password,$db_database,$db_port);
        
        $connexio->query("SET NAMES 'utf8'");
        return $connexio;
    }
}
?>