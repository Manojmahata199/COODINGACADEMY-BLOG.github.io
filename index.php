<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>manojloginpage</title>
	<link rel="stylesheet" type="text/css" href="indexstyle.css">
	<script src="index.js"></script>
</head>
<body>


    <nav>
		<div class="logo" ><h1>CODING ACADEMY</h1>
			
		</div>
		<div class="menu">
			<a href="#home">home</a>
			<a href="#course">Courses</a>
			<a href="#service">Service</a>
			<a href="#About">About</a>
			<a href="#contact">contact</a>
		</div>
	</nav>
	<div class="main-div">
		<div class="center-div">
			<h3>Registration form</h3>
			<div class="small-div">
				<form action="jmyweb.php" method="post" onsubmit="return myweb()" name="form1" >
					<div>
						User Name: <input type="text" placeholder="enter your name here" id="name" name="name">
					               <p id="nameerror"></p>
				    </div>
					<div>
						User Email: <input type="text" placeholder="enter your email" id="email" name="email">
					              <p id="emailerror"></p>
					</div>
					<input type="submit" name="submit" id="sub-btn" value="Log In">
				</form>
				
			</div>
			
		</div>
	</div>

</body>
</html>