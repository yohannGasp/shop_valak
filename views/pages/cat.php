<table border="1" width="90%">
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
            <td width="30%"><a href="?view=product&id=' . $item[0].'"><img src="../../images/'.$item[4].'"></img></a></td>
            <td width="10%">'.  $item[5] . '</td>
           </tr>';  

};
?>

 </tbody>   
</table>
