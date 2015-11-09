<h2 align="center">Оформление заказа</h2>

<?php
if ($_SESSION['cart'] && !isset($_POST['order'])) {
?>

<form action="index.php?view=order" method="post" id="cart-form">

    <table id="mycart" align="center" border="1">
        <tr>
            <th>Товар</th>            
            <th>Цена</th>            
            <th>Количество</th>            
            <th>Всего</th>            
        </tr>

        <?php
            foreach ($_SESSION['cart'] as $id => $quantity) {
                    $product = get_product($id);
                    echo '<tr>
                            <td align="center">'.$product[1].'</td>
                            <td align="center">'.number_format($product[3],2).'</td>
                            <td align="center">'.$quantity.'</td>
                            <td align="center">'.number_format($product[3]*$quantity,2).'</td>
                          </tr>';
                };   
        ?>

    </table>
        <p class="total" align="center">Общая сумма заказа:<span class="product-price"> <?php echo number_format($_SESSION['total_price'],2); ?></span></p>
        
        <p align="center">
        Имя <br>
        <input type="text" name="name"><br>
        Фамилия <br>
        <input type="text" name="s_name"><br>            
        Адрес <br>
        <input type="text" name="address"><br>            
        Почтовый индекс <br>
        <input type="text" name="post_index"><br>            
        E-mail <br>
        <input type="text" name="email"><br>            
        </p>

        <p align="center"><input type="submit" name="order" value="Заказать"></p>
</form>

<?php
} 
elseif ($_SESSION['cart'] && isset($_POST['order'])){

   $name       =  $_POST['name'];
   $s_name     =  $_POST['s_name'];
   $address    =  $_POST['address'];
   $post_index =  $_POST['post_index'];
   $email      =  $_POST['email'];

   $date = date('Y-m-d');
   $time = date('H:i:s');

    foreach ($_SESSION['cart'] as $id => $quantity) {
        $product = get_product($id);
        $query = mysql_query("INSERT INTO orders(name,s_name,address,post_index,email,date,time,product,prod_id,price,qty) VALUES ('$name','$s_name','$address','$post_index','$email','$date','$time','$product[1]','$product[0]','$product[3]','$quantity')");
        unset($_SESSION['cart'][$id]);
    };

    echo '<p align="center">Ваш заказ успешно принят. Спасибо за покупку.</p>';
    
    $_SESSION['total_items'] = total_items($_SESSION['cart']);
    $_SESSION['total_price'] = total_price($_SESSION['cart']);
//    header('Location:?view=cart');
};

?>
