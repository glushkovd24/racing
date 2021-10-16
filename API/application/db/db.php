<?php
    class DB{
        
    }
    $host = "racing";
    $user = "root";
    $password = "";
    $db_name = "test";
    $connect = mysqli_connect($host, $user, $password, $db_name);
    if($connect == true){
        echo "DB is connected<br/>";
    }else{
        echo "lox<br/>";
    }
    //Вывод юзеров и паролей
    /*if ($result = mysqli_query($connect, 'SELECT login, password FROM users')){
        print("Users: <br/>");
        while($row = mysqli_fetch_assoc($result)){
            echo ($row['login']. " ". $row['password']);
            echo "<br/>";
        }
        mysqli_free_result($result);
    }*/
?>