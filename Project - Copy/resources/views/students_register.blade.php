<!DOCTYPE html>
<html>
<head>
	<title>Register Form Design</title>
	<link rel="stylesheet" type="text/css" href="css/style3.css">
</head>
<body>
    <div class="loginbox">

    	<h1>Register Here</h1>

    	<form>

				<form action="{{ route('store') }}" method="post">
 		     {{ csrf_field() }}

				 <p>ID</p>
  		 	<input type="text" name="id" id="id" placeholder="Enter Id..">

				<p>Name</p>
  		 	<input type="text" name="name" id="name" placeholder="Enter name..">


 		 <p>Email</p>
 		 <input type="text" name="email" id="email" placeholder="Enter Email..">

 		 	<p>Password</p>
 		 	<input type="password" name="password" id="password" placeholder="Enter password..">


    		<input type="submit"  value="Submit">
    		<a href="#">Lost your password</a><br>
    		<a href="#">Don't have an account</a>
    	</form>

    </div>

</body>
</html>
