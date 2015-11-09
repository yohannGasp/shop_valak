<?php
  echo "string";
    include('db.php');
    $search = "Lorem";
   //if(isset($_POST['search'])){
    //$search = mysql_real_escape_string(trim($_POST['search']));
    $sql = "SELECT title, text FROM news WHERE title LIKE '%$search%' or text LIKE '%$search%'";
    $result = mysql_query($sql);
    $text = '';
 
     if(mysql_num_rows($result) > 0){
         while ($row = mysql_fetch_assoc($result)){
             $text .= '<p style="font-weight:bold;">'. $row['title'] . '</p><p>' . $row['text'] . '</p>';
         };
         $bold = '<span style="color:red;">' . $search . '</span>';
         $text = str_ireplace($search, $bold, $text);
     } else {
         $text = '<p>Ничего не найдено</p>';
     };
    echo $text;
   //};

?>