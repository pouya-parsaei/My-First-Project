<?php
# get users data from sign up form and put it in usersdata file
/* $data = $_POST["data"];
file_put_contents('usersdata' , $data . PHP_EOL , FILE_APPEND); */
var_dump($_POST) . PHP_EOL;
#connect to PDO
try{
    $db = new PDO("mysql:host=localhost;dbname=myproject;charset=utf8mb4","root",'',);
    echo "successfully connected to mysql" . PHP_EOL;

}catch(\PDOException $e){
    var_dump($e). PHP_EOL;
}
$createTableQuery = "CREATE TABLE users(
    user_ID int PRIMARY KEY AUTO_INCREMENT,  
    email varchar(128),
    username varchar(128),
    Pass varchar(128),
    City varchar(128),
    neighborhood varchar(128)
)";


$insUserDataToDb = "INSERT INTO users
(email,username,Pass,City,neighborhood) VALUES
(?,?,?,?,?);";
$stmt = $db ->prepare($insUserDataToDb);
$stmt -> execute([$_POST['data'],'usddfd','ddsdsfd','dsfdsdd','gsdsfdg']);







/* $userdata = $_POST['data'];

file_put_contents('users',$userdata . PHP_EOL,FILE_APPEND); */

