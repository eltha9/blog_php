<?php
// get psw 
$db_log = parse_ini_file("../config.ini");
$db_log = (object)$db_log;


try{
    $pdo = new PDO('mysql:dbname='.$db_log->db_name.';host='.$db_log->host.';port='.$db_log->port.'', $db_log->user, $db_log->psw);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    echo 'ok db';
}catch(PDOException $e){
    die('error in db');
}


function fetch($pdo, $table,$selection, $condition = NULL ){
    if($condition != NULL){
        $query = $pdo->query('SELECT '.$selection.' FROM '.$table.' WHEN '.$condition)->fetchAll();
        echo 'option';
    }else{
        $query = $pdo->query('SELECT '.$selection.' FROM '.$table)->fetchAll();
        echo 'no option';
    }
    
    return $query; 
}

function add(){
    $exec = $pdo->exec('INSERT INTO');
}
// function remove(){

// }

print_r(fetch($pdo,'topics','id'));

?>