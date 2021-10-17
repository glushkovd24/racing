<?php
    //class DB{

    //public function connectDB(){
        $mysqli = new mysqli('racing', 'root', '', 'test');
        if(mysqli_connect_errno()){
            echo "DB is not connected. Error code: %s\n<br/>", mysqli_connect_error();
            exit;
        }
    //}
    //public function addUser(){
        if (isset($_POST['done']) && isset($_POST['login']) && isset($_POST['password'])){
            $stmt = $mysqli->prepare("INSERT INTO users VALUES(?, ?, ?)");
            if (!$stmt){
                die("error");
            }
            $stmt->bind_param('sss', $id, $log, $par);
            $log = $_POST['login'];
            $par = $_POST['password'];
            $id = null;
            $stmt->execute();
            $mysqli->close();
        }
    //}
    //}
?>