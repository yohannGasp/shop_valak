<h2 align="center">���� ������� �������</h2>

<?php
if ($_SESSION['cart']) {
?>

<form action="index.php?view=update_cart" method="post" id="cart-form">

    <table id="mycart" align="center" border="1">
        <tr>
            <th>�����</th>            
            <th>����</th>            
            <th>����������</th>            
            <th>�����</th>            
        </tr>

        <?php
            foreach ($_SESSION['cart'] as $id => $quantity) {
                    $product = get_product($id);
                    echo '<tr>
                            <td align="center">'.$product[1].'</td>
                            <td align="center">'.number_format($product[3],2).'</td>
                            <td align="center"><input type="text" size="2" name="'.$id.'" maxlength="2" value="'.$quantity.'"></td>
                            <td align="center">'.number_format($product[3]*$quantity,2).'</td>
                          </tr>';
                };   
        ?>

    </table>
        <p class="total" align="center">����� ����� ������:<span class="product-price"> <?php echo number_format($_SESSION['total_price'],2); ?></span></p>
        <p align="center"><input type="submit" name="update" value="��������"></p>
</form>
<p align="center"><a href="?view=order">�������� �����</a></p>
<?php
} else {
    echo '<p align="center">���� ������� �����</p>';
}

?>
