<table  class="table table-striped table-bordered table-hover" border="1" width="90%">
<thead>
    <tr align="left">
        <th width="5%"> № п/п    </th>
        <th width="20%">Название  </th>
        <th width="25%">Описание  </th>
        <th width="10%">Цена      </th>
        <th width="30%">Фото      </th>
        <th width="10%">Категория </th>
    </tr>
</thead>
<tbody>

<?php

foreach ($products as $item) {

    echo  '<tr valign="top">
            <td width="5%"> ' . $item[0].'</td>
            <td width="20%">' . $item[1] . '</td>
            <td width="25%">' . $item[2] . '</td>
            <td width="10%">' . $item[3] . '</td>
            <td width="30%"><a href="?view=product&id=' . $item[0].'"><img src="../../images/'.$item[4].'" class="img-rounded"></img></a></td>
            <td width="10%">'.  $item[5] . '</td>
           </tr>';  

}

// if ($db = @mysql_connect("localhost","root","root")){
//     mysql_select_db("shop",$db);
//     mysql_query('SET NAMES cp1251');

//     $res = mysql_query('SELECT * FROM `products` ORDER BY id DESC');
//     while ($pole = mysql_fetch_array($res)) {
//     echo  '<tr valign="top">
//             <td width="5%"> ' . $pole[0] . '</td>
//             <td width="20%">' . $pole[1] . '</td>
//             <td width="25%">' . $pole[2] . '</td>
//             <td width="10%">' . $pole[3] . '</td>
//             <td width="30%"><img src="../../images/'.$pole[4].'"></img></td>
//             <td width="10%">'.  $pole[5] . '</td>
//            </tr>';  
        
//     }
//     mysql_close($db);
// }
// else {
//     echo "not connect";
// }



?>

 </tbody>   
</table>
