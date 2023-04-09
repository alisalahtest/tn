<?php
include 'connection.php'
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
				<li> <a href="index.html">الصفحة الرئيسية</a></li>
				<li> <a href="Account.php">فتح حساب </a></li>
				<li> <a href="Login.php">تسجيل الدخول</a></li>
			</ul>
		</nav>		
	</div>
</div>
</div>

<!--------------Account -------->

<div class="account">
<div class="container">
	<div class="row">
		<div class="col-2">
			<img src="IMG/image1.jpg">
		</div>
		<div class="col-2">
			<div class="form">
					<div class="form-btn">
						<span>دخول   </span>
						
						
					</div>

					<form id="Loginform" method="post" action="logfrom.php">
						<input type="text" placeholder="اسم المستخدم" name="ulog" autocomplete="off" required>
						<input type="password" placeholder="كلمة السر" name="plog" required>
						<button type="submit" class="btn" name="login"> تسجيل الدخول</button>
						<a href="">نسيت كلمة السر</a>
				
			</div>
		</div>
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
		<p class="copy">Copyright 2022 - AliSalah, Ibrahim Heshiam, Saleh Khaled, Mohamed Alaa/p>
	</div>
	</div>


</body>
</html>