<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>codingacademy.com</title>
	<link rel="stylesheet" type="text/css" href="jmywebstyle.css">
	<script src="jmyweb.js"></script>
	<script src="https://kit.fontawesome.com/a53c52c612.js" crossorigin="anonymous"></script>
</head>
<body>
<?php
 $server="localhost";
 $user="root";
 $password="";
 $db="manojblogsite";

 $conn=mysqli_connect($server,$user,$password,$db);

 if($conn){
    $username=$_POST['name'];
	$useremail=$_POST['email'];

	   $query="insert into register_table(name,email)values('$username','$useremail')";
	   $resultquery=mysqli_query($conn,$query);
	   if(!$resultquery){
		   ?>
		    <script>
			   alert("Registration is not successfull");
		    </script>

		   <?php
	   }
	   else{ ?>
	        <script>
		        alert("Registration successfull");
		    </script>

	        <?php 
	    }
	}
?>

	<header>
		<nav>
			<div class="logo" ><button class="open-btn" onclick="menuopen()"><i class="fa fa-bars"></i></button><h1>CODING ACADEMY</h1>
				
			</div>
			<div class="menu">

				<li><a href="#homesection">home</a></li>
				<li>
					<div class="drop-btn">
					    <a href="#course">Courses</a>
					    <button class="btn-menuopen" onclick="dropmenuopen()"><i class="fa fa-caret-down"></i></button>
					</div>
					<ul class="drop-list" id="droplist">
						<li><a href="kcprogramming.html">C programming</a></li>
						<li><a href="ljavaprogram.html">Java programming</a></li>
						<li><a href="python.html">Python programming</a></li>
						<li><a href="zcpp.html">CPP programming</a></li>
						<li><button onclick="dropmenuclose()"><i class="fa fa-caret-up"></i></button></li>
					</ul>
				</li>
				<li><a href="#service">Service</a></li>
				<li><a href="#About">About</a></li>
				<li><a href="#contact">contact</a></li>
			</div>
		</nav>
		<div class="home">
				<div class="main-logo">
				  <div id="menu-bar">
					<ul class="ul-1">
						<button class="btn-close" onclick="menuclose()"><i class="fa fa-close"></i></button>
						<li><a href="#homesection">home</a></li>
				        <li><a href="#course">Courses</a></li>
			        	<li><a href="#service">Service</a></li>
				        <li><a href="#About">About</a></li>
				        <li><a href="#contact">contact</a></li>
						
					</ul>
					
				  </div>

				  <section id="homesection" class="homesection">
					<h3 class="h1"><b>WELCOME TO CODING ACADEMY</b></h3>
					<h1 class="h2"><b>Thank you for visit</b> </h1>
					<p><b>LEARN CODING TO BECOME A MASTER IN CODING</b> </p>
					<div class="class-homebtn">
					    <a href="https://youtu.be/WnBiMm6oGbw" class="btnone"><b>watch video</b></a>
					    <a href="https://www.youtube.com/channel/UCk1S08u8P9_g-pPCWGuN67w" class="btnone"><b>subscribe</b></a>
				    </div>
				  </section>
			    </div>
				<div class="subject-section">
					<div class="search-bar">
						<input type="text" placeholder="Search Different Courses">
						<button type="submit" name="submit">Search</button>
					</div>
					<div class="subject-alllist">
						<ul>
							
							<li class="subject-list" ><button onclick="language()">Language</button></li>
							<li class="subject-list" ><button onclick="datastruc()">Data structure</button></li>
							<li class="subject-list" ><button onclick="algorithm()">Algorithm</button></li>
							<li class="subject-list" ><button onclick="database()">Database</button></li>
							<li class="subject-list" ><button onclick="frontend()">Front-End</button></li>
							<li class="subject-list" ><button onclick="backend()">Back-End</button></li>
							

							


						</ul>
					</div>
				</div>
			</div>
</header>
		
	


	





	<!------- for course section------>

	<section class="coursesection" id="course">
		
		<div class="coursediv">
		    <h2 class="h2co">Courses</h2>
	    </div>
		<div class="course-flex">
          
	      <div class="coursediv2" id="language1">
	    	<div class="img">
			    <img src="https://th.bing.com/th/id/OIP.QEwwqVaIePg1_IZu2EA88QAAAA?w=136&h=180&c=7&r=0&o=5&pid=1.7">
			
		    </div>
		        <h3 class="h3c"> C Programming Language</h3>
		    <div class="coursediv3">
		    	<h3 class="h3lc">Learn more</h3>
		        <a href="kcprogramming.html" class="btnone">here</a>
		    </div>
		    
		    
		  </div>
		
			<div class="coursediv2" id="language2">
			  <div class="img">
				  <img src="https://th.bing.com/th/id/OIP.QEwwqVaIePg1_IZu2EA88QAAAA?w=136&h=180&c=7&r=0&o=5&pid=1.7">
			  
			  </div>
				  <h3 class="h3c"> C Programming Language</h3>
			  <div class="coursediv3">
				  <h3 class="h3lc">Learn more</h3>
				  <a href="kcprogramming.html" class="btnone">here</a>
			  </div>
			  
			  
			</div>
		
			<div class="coursediv2" id="language3">
			  <div class="img">
				  <img src="https://th.bing.com/th/id/OIP.A-iDaA21pD0-bquHBGk3TAHaEc?w=271&h=180&c=7&r=0&o=5&pid=1.7">
			  
			  </div>
				  <h3 class="h3c"> Python Programming Language</h3>
			  <div class="coursediv3">
				  <h3 class="h3lc">Learn more</h3>
				  <a href="python.html" class="btnone">here</a>
			  </div>
			  
			  
			</div>
		
			<div class="coursediv2" id="language4">
			  <div class="img">
				  <img src="https://th.bing.com/th/id/OIP.KyhFQKguyMOPyCJ_iBLiNwHaIf?w=145&h=180&c=7&r=0&o=5&pid=1.7">
			  
			  </div>
				  <h3 class="h3c"> Cpp Programming Language</h3>
			  <div class="coursediv3">
				  <h3 class="h3lc">Learn more</h3>
				  <a href="zcpp.html" class="btnone">here</a>
			  </div>
			  
			  
			</div>
		    
		    
			<div class="coursediv2" id="datastruc1">
			  <div class="img">
				  <img src="https://th.bing.com/th/id/OIP.KyhFQKguyMOPyCJ_iBLiNwHaIf?w=145&h=180&c=7&r=0&o=5&pid=1.7">
			  
			  </div>
				  <h3 class="h3c"> Cpp Programming Language</h3>
			  <div class="coursediv3">
				  <h3 class="h3lc">Learn more</h3>
				  <a href="zcpp.html" class="btnone">here</a>
			  </div>
			  
			  
			</div>
		
			<div class="coursediv2" id="datastruc2">
			  <div class="img">
				  <img src="https://th.bing.com/th/id/OIP.A-iDaA21pD0-bquHBGk3TAHaEc?w=271&h=180&c=7&r=0&o=5&pid=1.7">
			  
			  </div>
				  <h3 class="h3c"> Python Programming Language</h3>
			  <div class="coursediv3">
				  <h3 class="h3lc">Learn more</h3>
				  <a href="python.html" class="btnone">here</a>
			  </div>
			  
			  
			</div>
		
			<div class="coursediv2" id="algorithm1">
			  <div class="img">
				  <img src="https://th.bing.com/th/id/OIP.Uo_0NtkU4MMSTn-sU3CT8QHaFb?w=243&h=180&c=7&r=0&o=5&pid=1.7">
			  
			  </div>
				  <h3 class="h3c"> Java Programming Language</h3>
			  <div class="coursediv3">
				  <h3 class="h3lc">Learn more</h3>
				  <a href="ljavaprogram.html" class="btnone">here</a>
			  </div>
			  
			  
			</div>
			<div class="coursediv2" id="algorithm2">
			  <div class="img">
				  <img src="https://th.bing.com/th/id/OIP.Uo_0NtkU4MMSTn-sU3CT8QHaFb?w=243&h=180&c=7&r=0&o=5&pid=1.7">
			  
			  </div>
				  <h3 class="h3c"> Java Programming Language</h3>
			  <div class="coursediv3">
				  <h3 class="h3lc">Learn more</h3>
				  <a href="ljavaprogram.html" class="btnone">here</a>
			  </div>
			  
			  
			</div>
		    
			
		
		 
		  </div>
		
	</section>





	<!---------for background section--->

    <?php
	$commentname=$_POST['commentname'];
	$commentsubject=$_POST['commentmassege'];

	   $query="insert into comment_table(name,comment)values('$commentname','$commentsubject')";
	   $resultquery=mysqli_query($conn,$query);
	   if(!$resultquery){
	?>
		    <script>
			   alert("comment not added successfull");
		    </script>

	<?php
	   }
	   else{
	?>
	        <script>
		        alert("comment added successfull");
		    </script>

	<?php 
	        mysqli_close($conn);  
	    }

	?>

	<section class="bottombackground">
		<h3><b>CODING ACADEMY</b></h3>
		<h1>WANT NEW COURSE -PLEASE COMMENT BELOW</h1>
		<p>for more courses like Web Developoment, Android Studio,Data 
			Analysis,SQL Database please cpmment below ,i will try to 
		add more courses like these ,our website allways think about 
		readers  wants and demands please follow us and stay contact
		with us thank you for visiting our website </p>
		<div class="commentbar">
			<form method="post" class="form" action="jmyweb.php">
				
				   
				   <input type="text" name="commentname" id="name" placeholder="Enter your name">
				   
				   <textarea id="massege" type="text" name="commentmassege" placeholder="Enter Your Massege"></textarea>
		           <input id="submit" type="submit" name="submit" class="sendbtn" placeholder="Submit">
			   
		    </form>
		   
		</div>
		






	</section>



	<section class="comment-section">
		<div class="allcomment-div">


			<div class="comment-div">
				<div class="user">
					<i class="fa fa-user"></i>
					<h3><b>Manoj Mahata</b></h3>
				</div>
				<div><p>this is a new para of Comment section and now you can comment by your choice</p></div>
			</div>
			<div class="comment-div">
				<div class="user">
					<i class="fa fa-user"></i>
					<h3><b>Manoj Mahata</b></h3>
				</div>
				<div><p>this is a new para of Comment section and now you can comment by your choice</p></div>
			</div>
			<div class="comment-div">
				<div class="user">
					<i class="fa fa-user"></i>
					<h3><b>Manoj Mahata</b></h3>
				</div>
				<div><p>this is a new para of Comment section and now you can comment by your choice</p></div>
			</div>
			<div class="comment-div">
				<div class="user">
					<i class="fa fa-user"></i>
					<h3><b>Manoj Mahata</b></h3>
				</div>
				<div><p>this is a new para of Comment section and now you can comment by your choice</p></div>
			</div>
			<div class="comment-div">
				<div class="user">
					<i class="fa fa-user"></i>
					<h3><b>Manoj Mahata</b></h3>
				</div>
				<div><p>this is a new para of Comment section and now you can comment by your choice</p></div>
			</div>
		</div>
	</section>


	<!------ for about section----->



	<section class="freeeducationsection" id="About">
		<div class="coursediv">
		    <h2 class="h2co">About us</h2>
	    </div>
		<div class="aboutdiv">
		    <div class="paraone">
			  <p class="bigtext">FREE EDUCATION FOR EVERYONE -THIS IS A BIG LEARNING SIGHT</p>
			  <p>	According to international human rights law, primary education shall be compulsory and free of charge. Secondary and    higher education shall be made progressively free of charge.

 			
		    </div>
		    <div class="img">
		    	<img src="data:image/jpeg;base64,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">
		    </div>
	
	    </div>
	    <div class="aboutdiv">
		    <div class="paraone">
			    <p class="bigtext" >ABOUT US -THIS IS A BIG FREE EDUCATION SIGHT</p>
			    <p>	We give some good free education tips for new and junior developer and computer science student 
			     for gain some knollege in coding ,we know in this time in 2021 ther lots of education sight and online learnig platform ,those are so expensive for a middle class family student to take the course in high price, this is impossible for some student ,so our our sight for those stuident who are welcome to learn basic of coding in diffrent language ,like c, c++,java,python ,html,c#,javascript,etc.  </p>
			     <p>Tutorials Point originated from the idea that there exists a class of readers who respond better to online content and prefer to learn new skills at their own pace from the comforts of their drawing rooms.

                     The journey commenced with a single tutorial on HTML in 2006 and elated by the response it generated, we worked our way to adding fresh tutorials to our repository which now proudly flaunts a wealth of tutorials and allied articles on topics ranging from programming languages to web designing to academics and much more.</p>
			
		    </div>
		    <div class="img">
			    <img src="data:image/jpeg;base64,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">
		    </div>
		</div>

	</section>



	<!--- for  services section ----->



	<section class="servicessection" id="service">
		<div class="coursediv">
		    <h2 class="h2co">Services</h2>
	    </div>
		<div class="aboutdiv">
		    <div class="paraone">
			  <p class="bigtext">OUR SERVICES - FREE SERVICES </p>
			  <p>
			  	We provide some  education services in youtube ,google ,facebook,linkedin on many sights .if you want to reach us on youtube ,gooogle, facebook ,linkedin link are given below  by clicking those link you can directly going our page .
			  </p>	

 			
		    </div>
		    <div class="img">
		    	<img src="https://th.bing.com/th/id/OIP.pVhw_RnKoI50ZjEEjX5Q1gHaDw?w=286&h=177&c=7&r=0&o=5&pid=1.7">
		    </div>
	
	    </div>
	    <div class="aboutdiv">
		    <div class="paraone">
			    <p class="bigtext" >VIDEO TUTORIAL SERVICE-THIS IS A BIG FREE EDUCATION SIGHT</p>
			    <p>	We give some good free education tips for new and junior developer and computer science student 
			     for gain some knollege in coding ,we know in this time in 2021 ther lots of education sight and online learnig platform ,those are so expensive for a middle class family student to take the course in high price, this is impossible for some student ,so our our sight for those stuident who are welcome to learn basic of coding in diffrent language ,like c, c++,java,python ,html,c#,javascript,etc.  </p>
			
		    </div>
		    <div class="img">
			    <img src="https://th.bing.com/th/id/OIP.a7Y2z1iSzS_6KXNOZJOBKQHaE8?w=219&h=180&c=7&r=0&o=5&pid=1.7">
		    </div>
		</div>

	</section>



	







	<!--- for contact section--->








	<section class="lastsection" id="contact">
		<div class="linelast">
			<hr>
		</div>
		<div class="coursediv">
		    <h2 class="h2co">Contact us</h2>
	    </div>
	    
		<div class="allsight">
			
			<div class="pagelink">
				<div class="sightlink">
					<img src="https://th.bing.com/th/id/OIP.TOkyoG9WekimdckvSDxdtgHaFt?w=233&h=180&c=7&r=0&o=5&pid=1.7">
					<a href="www.youtube.com" class="linktext">youtube channel link</a>
				</div>
				<div class="sightlink">
					<img src="https://th.bing.com/th/id/OIP._cZxl4BLaQaQcw6a-kkaSAHaFj?w=240&h=180&c=7&r=0&o=5&pid=1.7">
					<a href="www.facebook.com" class="linktext">facebook page link</a>
				</div>
				<div class="sightlink">
					<img src="https://th.bing.com/th/id/OIP.GEYQHMObEU8NKsnJ_HPxzQHaEK?w=329&h=185&c=7&r=0&o=5&pid=1.7">
					<a href="www.linkedin.com" class="linktext">linkedin page link</a>
				</div>
				
			</div>
			<div class="personalsight">
				<div class="sightlink">
					<img src="https://th.bing.com/th/id/OIP._cZxl4BLaQaQcw6a-kkaSAHaFj?w=240&h=180&c=7&r=0&o=5&pid=1.7">
					<a href="www.facebook.com" class="linktext">websight designer fcebook profile</a>
				</div>
				<div class="sightlink">
					<img src="https://th.bing.com/th/id/OIP.GEYQHMObEU8NKsnJ_HPxzQHaEK?w=329&h=185&c=7&r=0&o=5&pid=1.7">
					<a href="www.linkedin.com" class="linktext">websigt Designer Linked in Profile</a>
				</div>
			</div>
		    
		
		    <div class="address">
			    <div class="coursediv">
		           
		           <div class="address2">
		    	      <p>kolkata,west bengal, india</p>
		    	      <a href="mailto:manojmahata.mid@gmail.com" class="linktext">Email:-manojmahata.mid@gmail.com</a>
		    	      <a href="tel:+8637583151" class="linktext">mobile no:-8637583151</a>
		    	
		            </div>
		        </div>
	    
	            
		    </div>
			<div class="imgmap">
			    <img src="https://th.bing.com/th/id/OIP.QOE5bAIUh2oQ9QhdTrvosQHaH5?w=193&h=206&c=7&r=0&o=5&pid=1.7">
		    </div>

		 </div>
			
		

	</section>








	<!------for copyright section--->


	<section class="copyright">
		<div class="linelast">
			<hr>
		</div>
		<h4>© Copyright 2021. All Rights Reserved.</h4>
		<h4>coocking policy</h4>
		<h4>help and service</h4>
	</section>
	
	
</body>
</html>  