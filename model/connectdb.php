<?php
function connect(){
    $conn = new PDO('mysql:host=localhost;dbname=innis','root','');
    return $conn;

}

?>