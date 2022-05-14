<?php

#CODE
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "izibili";

    // mysql_connect($host,$dbusername,$dbPassword);
    // mysql_select_db($dbname);
    $db = new \PDO('mysql:host=localhost:3306;dbname=izibili', 'root', '');
    $db->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
    $db->beginTransaction();


if (isset($_POST['email'])){
    $email=$_POST['email'];
    $password=$_POST['password'];


        $query = 'SELECT * from email where email= "'.$email.'" AND passwords="'.$password.'" limit 1';
        $return = $db->query($query)
            ->fetchAll();
        // check user
        $stmt = $db->prepare($query);
        $result = $stmt->execute();

        $db->commit();

        // print($result);
        // die;

        print_r($return);
        if($return!=null){
            Redirect('./links/SignIn/index.php', false);
        }else{
            Redirect('index.php');
        }
        

    }else{
        echo "All fields are required!";
        die;
    }
    
    function Redirect($url, $permanent = false)
        {
            header('Location: ' . $url, true, $permanent ? 301 : 302);
    
            exit;
        }
    
        

?>