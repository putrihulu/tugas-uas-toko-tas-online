<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Navbar (Navigation Bar) dengan Bootstrap</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle Nav</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">PENJUALAN TAS toko putri</a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
			<li class="active"><a href="uasputri.html">HOME <span class="sr-only">(current)</span></a></li>
			<li><a href="produk.html">PRODUK</a></li>
			<li><a href="about.html">ABOUT</a></li>
			<li><a href="contant.html">CONTANT</a></li>
			</ul>
			<form class="navbar-form navbar-left">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="isikan keyword">
			</div>
			<button type="submit" class="btn btn-default">Cari</button>
			</form>
			<ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span> User <span class="caret"></span></a>
				<ul class="dropdown-menu">
				<li><a href="profile.html">Profile</a></li>
				<li><a href="#">Logout</a></li>
				</ul>
			</li>
			</ul>
		</div>
		</div>
	</nav>

		<div class="container">
		<div class="row">
			<div class="col-md-12">	
				<div class="jumbotron">
				  <h1><b>PRODUK</b></h1>
				</div>

	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<h3> tas ransel </h3>
				<img src="picture/tas1.jpg" height="200" width="200">
				<h4> Rp.10.000 </h4>
				<input class="btn btn-success btn-lg" type="submit" value="details">
				<input class="btn btn-success btn-lg" type="submit" value="beli">
			</div>
			<div class="col-md-3">
				<h3> tas kulit</h3>
				<img src="picture/tas2.jpg" height="200" width="200">
				<h4> Rp.40.000 </h4>
				<input class="btn btn-success btn-lg" type="submit" value="details">
				<input class="btn btn-success btn-lg" type="submit" value="beli">
			</div>
			<div class="col-md-3">
				<h3> tas reseller </h3>
				<img src="picture/tas3.jpeg" height="200" width="200">
				<h4> Rp.60.000 </h4>
				<input class="btn btn-success btn-lg" type="submit" value="details">
				<input class="btn btn-success btn-lg" type="submit" value="beli">
			</div>
			<div class="col-md-3">
				<h3> tas ideas </h3>
				<img src="picture/tas4.jpg" height="200" width="200">
				<h4> Rp.50.000 </h4>
				<input class="btn btn-success btn-lg" type="submit" value="details">
				<input class="btn btn-success btn-lg" type="submit" value="beli">
			</div>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<h3> tas selempang </h3>
				<img src="picture/tas5.jpg" height="200" width="200">
				<h4> Rp.70.000 </h4>
				<input class="btn btn-success btn-lg" type="submit" value="details">
				<input class="btn btn-success btn-lg" type="submit" value="beli">
			</div>
		</div>
	</div>
<script src="bootstrap/js/jQuery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>