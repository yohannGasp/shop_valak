<table>

<?php

    echo  '<tr><td>' . $product[0].'</td></tr>
           <tr><td>' . $product[1].'</td></tr>
           <tr><td>' . $product[2].' <a href="?view=add_to_cart&id=' . $product[0].'">Добавить в корзину</a> </td></tr>
           <tr><td>' . $product[3].'</td></tr>
           <tr><td><img src="../../images/'.$product[4].'"></img></td></tr>
           <tr><td>' . $product[5].'</td></tr>';  
      

?>

</table>