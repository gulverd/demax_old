<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=0, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
	<title>Demax Group</title>
	<link href="https://fonts.googleapis.com/css?family=Advent+Pro" rel="stylesheet">
<!-- 	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js"></script> -->
<!-- 	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
</head>
<body ng-app="myApp">
	<?php 
		include 'header.php';
	?>
<div class="about_wrp">
	<div class="container about_cont">
		<div class="col-md-12 projects_title_wrp">
			<h4>დაგვიკავშირდით</h4>
		</div>
		<div class="col-md-12 contact_wrp">
			<div class="col-md-12 contact_info_wrp">
				<span>შპს „დემაქს გრუპი“</span>
			</div>
			<div class="col-md-12 contact_info_wrp">
				<span>მისამართი: ა. აფაქიძის #11, ქ.თბილისი</span>
			</div>
			<div class="col-md-12 contact_info_wrp">
				<span>მაგთიფიქსი: 0790406040</span>
			</div>
			<div class="col-md-12 contact_info_wrp">
				<span>მობ : 555 33 99 55 ; 555 602 602</span>
			</div>
			<div class="col-md-12 contact_info_wrp">
				<span>ელექტრონული ფოსტა: demaxgrouop@mail.com, info@demax.ge</span>
			</div>
		</div>
		<div class="col-md-12 map_wrp">
   			<img src="img/map.png" id="map">
		</div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="app.js"></script>
</body>
</html>
<?php 
	include 'projects_main.php';
	include 'footer.php';
?>