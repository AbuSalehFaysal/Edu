




<!DOCTYPE html>
<html lang="en" class=" ">

<head>
    <meta charset="utf-8" />
    <title>Education Board Result</title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="edu-admin/css/app.v1.css" type="text/css" />
    <!--[if lt IE 9]> <script src="js/ie/html5shiv.js"></script> <script src="js/ie/respond.min.js"></script> <script src="js/ie/excanvas.js"></script> <![endif]-->
</head>

<body class="">
    <section id="content" class="m-t-lg wrapper-md animated fadeInUp">
        <div class="container aside-xl"> <a class="navbar-brand block" href="#">Result Management System</a>
            <section class="m-b-lg">
                <header class="wrapper text-center"> <strong>Fill the form and click submit to check your result.</strong> </header>

	<div class="wraper">
		<div class="w-top">
			<div class="logo">
				<img src="" alt="">
			</div>
			<div class="banner">
				<h3></h3>
				<hr>
				<h4></h4>
			</div>
		</div>
		<div class="w-main">
			<div class="search-result">




				<form action="search.php" method="POST">
					<table>
					
					
					<tr>
						<td>Board</td>
						<td>
						 	<select name="board">
		                          <option value=""selected>Select One</option>
								  <option value="barisal">Barisal</option>
								  <option value="chittagong">Chittagong</option>
								  <option value="comilla">Comilla</option>
		                          <option value="dhaka">Dhaka</option>
								  <option value="dinajpur">Dinajpur</option>
								  <option value="jessore">Jessore</option>
		                          <option value="rajshahi">Rajshahi</option>
		                          <option value="sylhet">Sylhet</option>
		                          <option value="madrasah">Madrasah</option>
								  <option value="tec">Technical</option>
								  <option value="dibs">DIBS(Dhaka)</option>
                          	</select>
						</td>
					</tr>
					<tr>
						<td> Roll No</td>
						<td><input name= "roll" type="text" placeholder="Roll No"></td>
					</tr>
					<tr>
						<td> Registration No</td>
						<td><input name= "reg" type="text" placeholder="Registration No"></td>
					</tr>
					<tr>
						<td></td>
						<td><input class="btn btn-success" name="submit" type="submit" value="submit"></td>
					</tr>
				</table>
				</form>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>

				<a class="btn btn-info" href="edu-admin/index.php">Click here if you are an Admin</a>
			</div>
		</div>
		
	</div>

	

	
</body>

</html>