<?php
    function db_connect(){

        $host = 'localhost';
        $user = 'root';
        $pswd = 'root';
        $db = 'shop';

        $connection = @mysql_connect($host,$user,$pswd);
        mysql_query('SET NAMES cp1251'); 
        if (!$connection || !mysql_select_db($db,$connection)) {

            return false;
        };

        return $connection;
    };

    function db_result_to_array($result){

        $res_array = array();
        $count = 0;
        while ($row = mysql_fetch_array($result)) {
            $res_array[$count] = $row;
            $count++;
        }
        return $res_array;
    };

   function get_products(){

        db_connect();
       
        $query = "SELECT * FROM products ORDER BY id DESC";
        $result =  mysql_query($query);
        $result =  db_result_to_array($result);
        return $result;
   };

   function get_cat_products($cat){

        db_connect();
       
        $query = "SELECT * FROM products WHERE cat = '$cat'";
        $result =  mysql_query($query);
        $result =  db_result_to_array($result);
        return $result;
   };   

   function get_cat(){

        db_connect();
       
        $query = "SELECT * FROM category ORDER BY id DESC";
        $result =  mysql_query($query);
        $result =  db_result_to_array($result);
        return $result;
   }; 

   function get_product($id){

        db_connect();

        $query = "SELECT * FROM products WHERE id = " . $id;
        $result =  mysql_query($query);
        $row = mysql_fetch_array($result);
        return $row;

   };

?>

