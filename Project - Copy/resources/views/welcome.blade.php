<!DOCTYPE html>
<html>
<head>
	<title>Exam Marks Management</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="wrap">
    	<div class="search">
    		<input type="text" class="searchterm" name="" placeholder="To know the result type the Subject code..">

    		<button type="submit" class="searchbtn">
    		<i class="fa fa-search"></i>
    		</button>

    	</div>
    </div>

    <header>
    	<div class="main">

           <div class="logo">
           	<img src="logo.png">

           </div>

    		<ul>
    			<li class="active"><a href="#">HOME</a></li>
    			 <li><a href="#">RESULTS</a></li>
    			 <li><a href="#">GALLERY</a></li>
    			 <li><a href="#">ABOUT</a></li>
    			 <li><a href="#">CONTACT</a></li>
    		</ul>

    	</div>

    	<div class="title">
    		<h1>Marks Management</h1>
       </div>


			 <div class="button4">
				 <a href="{{route('studentslogin')}}" class="btn">Students LOG IN</a>
				 <a href="{{route('login')}}" class="btn">Teachers LOG IN</a>
			 </div>


			 <div class="button5">
				 <a href="{{route('studentsregister')}}" class="btn">Students Register</a>
				 <a href="{{route('register')}}" class="btn">Teachers Register</a>
			 </div>



    </header>
    <div>

      <footer class="footer-bottom">
  <p class="text-center">&copy; 2019 All rights reserved| Ecommerce site</p>
</footer>

    </div>

</body>
</html>
