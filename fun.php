<?php   
require 'db.php';

function selectAll($table){

    global $conn;

    $sql = "SELECT * FROM $table ";
    $sql = $conn->prepare($sql);
    $sql->execute();

    return $sql->fetchAll();
    
}


function insert($table,$param = []){

    global $conn;
    $coll = '';
    $mask = '';

   foreach ($param as $key => $value) {
     $coll = $coll."$key";
     $mask = $mask."$value";



   }

   $sql = "INSERT INTO * $table ($coll) VALUES ($mask)";
   echo $sql;


}
     $users = [
        'name'=> "Nurs",
        'email'=> "qazxc@h.r",
        'password'=>12345
     ];
    insert('users',$users);





?>