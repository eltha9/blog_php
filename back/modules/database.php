<?php
// get psw 
$db_log = parse_ini_file("../config.ini");
$db_log = (object)$db_log;

echo $db_log -> host;
echo $db_log -> port;
echo $db_log -> db_name;
echo $db_log -> user;
echo $db_log -> psw;

try{
    $pdo = new PDO('mysql:dbname='.$db_log->db_name.';host='.$db_log->host.';port='.$db_log->port.'', $db_log->user, $db_log->psw);
}catch(PDOException $e){
    die('error in db');
}


function fetch(){

}

function add(){

}
function remove(){

}

?>