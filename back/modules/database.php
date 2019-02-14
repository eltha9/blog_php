<?php
// get psw 
$db_log = parse_ini_file("../config.ini");
$db_log = (object)$db_log;


try{
    $pdo = new PDO('mysql:dbname='.$db_log->db_name.';host='.$db_log->host.';port='.$db_log->port.'', $db_log->user, $db_log->psw);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}catch(PDOException $e){
    die('error in db');
}

// test varriable
$tab = [
    'title' => 'akojihug',
    'content' => 'guhijokihuzgr hugoyuifherhpgo <i> jihpuigyou</i>',
    'date' => '2019-02-13',
    'hour' => '23:56:45',
    'hash_topic' => 'dfghj45678lknjbhvg'
];

// concatenate function
function concatenate($tab, $separate = '\''){
    $temp = '';
    $i =0;
    foreach ($tab as $key => $value) {

        if($i<count($tab)-1){
            $temp = $temp.'\''.$value.'\' , ';    
        }else{
            $temp = $temp.'\''.$value.'\'';
        }
        $i++;

    }
    return $temp;
}
function concatenate_keys($tab){
    $temp = '';
    $i =0;
    foreach ($tab as $key => $value) {

        if($i<count($tab)-1){
            $temp = $temp.'`'.$value.'` , ';    
        }else{
            $temp = $temp.'`'.$value.'`';
        }
        $i++;

    }
    return $temp;
}


//usefull function
function fetch($pdo, $table,$selection, $condition = NULL ){
    if($condition != NULL){
        $query = $pdo->query('SELECT '.$selection.' FROM '.$table.' WHERE '.$condition)->fetchAll();
        echo 'option';
    }else{
        $query = $pdo->query('SELECT '.$selection.' FROM '.$table)->fetchAll();
        echo 'no option';
    }

    return $query; 
}

function add($pdo, $table, $keys){ // $keys is an associatif table with the keys and values of them

    $exec = $pdo->exec('INSERT INTO '.$table.' ('. $k .') VALUES ('. $p .')');
}

// add($pdo, 'topics', $tab);


// function remove($pdo, $table){

// }
function update($pdo, $table){

}
// echo '<pre>';
// print_r(fetch($pdo,'topics','*', 'id >1'));
// echo '</pre>';

?>