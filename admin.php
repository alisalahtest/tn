<?php
include 'connection.php';
include 'logfrom.php';
?>

<!DOCTYPE html>
<html dir="rtl" lang="ar" >
<head>
	<meta charset="UTF-8">
	<title>التوحيد و النور</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet">
</head>
<body>
	<div class="header">
<div class="container">
	<div class = "navbar">
			<div class= "logo">
			<img src="IMG/logo.png" width="125px">
		</div>
		<nav class="t1">
			<ul>
				<li> <a href="admin.php">الصفحة الرئيسية</a></li>
				<li> <a href="Products.php">منتجاتنا</a></li>
				<li> <a href="admin.php?logout='1'" >تسجيل الخروج</a></li>
			</ul>
		</nav>		
	</div>
<div class="row">
	<div class="col-2">
		<?php 
		if (isset($_SESSION['uname'])){
			echo ' <h1> Welcome ' . $_SESSION['uname'] ;
		}
		?>
		<h1>التوحيد والنور</h1>
		<p>أقوى العروض و الخصومات من التوحيد و النور .
التوحيد و النور مكان حبناه وكبرنا معاه .. كل احتياجات البيت العصرى فى مكان واحد .</p>

	</div>

	<div class="col-2">
		<img src="IMG/image1.png">
	</div>

</div>
</div>
</div>

<!----------featured Products------------------->	
<div class="small-container">
<h2 class="title">الافضل مبيعا</h2>
<div class="row">
	<div class="col-4">
		<img src="IMG/product-1.jpg">
		<h4>حذاءبحر </h4>
		
		<p>20 جنيه</p>
	</div>
	<div class="col-4">
		<img src="IMG/Product-2.jpg">
		<h4>غسالة كاندي سيلفر 7 كيلو </h4>
	
		<p>6500 جنيه</p>
	</div>
	<div class="col-4">
		<img src="IMG/Product-3.jpg">
		<h4>سخان اريون غاز 10 لتر</h4>
	
		<p>2500 جنيه</p>
	</div>
	<div class="col-4">
		<img src="IMG/Product-4.png">
		<h4>طقم سيراميك نيوفلام</h4>
	
		<p>1500 جنيه </p>
	</div>
</div>

<h2 class="title">عروض اليوم</h2>
<div class="row">
	<div class="col-4">
		<img src="IMG/Product-5.jpg">
		<h4>ثلاجة سامسونج 14 قدم</h4>
	
		<p>7500 جنيه</p>
	</div>
	<div class="col-4">
		<img src="IMG/Product-6.jpg">
		<h4>عجان اكاي</h4>
	
		<p>3000 جنيه</p>
	</div>
	<div class="col-4">
		<img src="IMG/Product-7.jpg">
		<h4>جهاز زبادي  سوناي</h4>
	
		<p>250 جنيه</p>
	</div>
	<div class="col-4">
		<img src="IMG/Product-8.jpg">
		<h4>خلاط لايف</h4>
	
		<p>250 جنيه</p>
	</div>
</div>
<div class="row">
	<div class="col-4">
		<img src="IMG/Product-9.jpg">
		<h4>رسيفر هيرشمان 5500 hd</h4>
	
		<p>300 جنيه</p>
	</div>
	<div class="col-4">
		<img src="IMG/Product-10.jpg">
		<h4>ترمس شاي هوم</h4>
	
		<p>150 حنيه</p>
	</div>
	<div class="col-4">
		<img src="IMG/Product-11.jpg">
		<h4>طقم جرانيت ايديال هوم</h4>
	
		<p>2000 جنيه</p>
	</div>
	<div class="col-4">
		<img src="IMG/Product-12.jpg">
		<h4>حلة تحمير نوفال معلقة زيت واحدة</h4>
		
		<p>500 جنيه</p>
	</div>
</div>
</div>



<!-----Footer---->
<div class="Footer">
	<div class="container">
		<div class="row">
				<div class="footer-col-2">
				<img src="IMG/logo.png" width="125px">
				<p>أقوى العروض و الخصومات من التوحيد و النور</p>
			</div>
			<div class="footer-col-3">
				<h3>مواعيد العمل</h3>
				<li>من  11:ص الي 11: م</li>
			</div>
			<div class="footer-col-4">
				<h3>صفحتنا علي</h3>
				<li>الفيس بوك</li>
				<li>البوتويب </li>
			</div>
		</div>
		<hr> 
		<p class="copy">Copyright 2022 - AliSalah, Ibrahim Heshiam, Saleh Khaled, Mohamed Alaa</p>
	</div>
	</div>

</body>
</html>