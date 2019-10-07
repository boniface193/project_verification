<?php

        session_start();

        error_reporting(E_ALL ^ E_DEPRECATED);

        $host = 'localhost';
        $user = 'root';
        $pass = '';

         mysql_connect($host, $user, $pass);

          mysql_select_db('company');

        $name = $_GET['name'];

        $data = "";


       $sql = "select * from people where name = '$name'";

       $resu = mysql_query($sql);

       $count = 0;

       while($temp = mysql_fetch_assoc($resu))
       {
            $count ++;

        }

       if ($count > 0)
       {
            $data  = "Project Topic already exist";
       }
        else
       {
          $data = "you can register";
       }
         echo $data;
?>
