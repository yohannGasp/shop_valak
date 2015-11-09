<html>
<head>
 <!-- <link rel="stylesheet" type="text/css" href="../../dist/css/bootstrap.min.css"> -->
 <link rel="stylesheet" type="text/css" href="css/style.css">
 <script type="text/javascript" src="../../js/jquery-2.1.1.min.js"></script>
 <script type="text/javascript" src="../../js/link.js"></script>

 <script type="text/javascript" src="../../js/top.js"></script>

<style type="text/css">

    .link_with_text {
        color: #fff;
    }

	    #linktext {
        display: none;
        position: absolute;
        font-size: 12px;
        background-color: gray;
        color: #fff;
        font-weight: bold;
        padding: 7px;
    }
    .top {
        cursor: pointer;
        font-weight: bold;
        color: #fff;
    }

</style>
<title> 

<?php
if ($db = @mysql_connect("localhost","root","root")){
	mysql_select_db("shop");
	mysql_query('SET NAMES cp1251');
	$res = mysql_query('SELECT * FROM `category`');
	while ($pole = mysql_fetch_array($res)) {
		echo $pole[1] . '  ';
	}
	mysql_close($db);
}
else {
	echo "not connect";
}

?> 


</title>
</head>

<body>
<div class="titles">
<h1>Интернет магазин</h1>
<h2>www.mysite.com</h2>
<table>
	<tr>
		<td>
			<div id="menu">
				<h1><a class="link_with_text" href="?view=index" showntext="Главная">Главная</a>                    
				<?php
					$category = get_cat();
					foreach ($category as $item) {
						echo '<a href="?view=cat&id='. $item[2] .'"> ' . $item[1] . '</a>';
					}
				?>
                <a href="?view=cart">Корзина <?php echo '('.$_SESSION['total_items'].') - '. number_format($_SESSION['total_price'],2); ?></a></h2>
			</div>
		</td>
	</tr>
</table>
<div id="linktext"></div>
</div>

<?php
	if (!in_array($view, $arr)) { echo "Error 404";} else {
    include($_SERVER['DOCUMENT_ROOT'].'/views/pages/'.$view.'.php');
};
?>


 <section class="footer-bottom">
2014 &copy; Jonathan White. All rights reserved.
</section>
<p><a class="top" href="#">Вверх</a></p>

</body>
</html>