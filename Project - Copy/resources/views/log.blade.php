<!DOCTYPE html>
<html>
<head>
	<title>RESULT SUBMIT FORM</title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>

<body>
<h1>RESULT SUBMIT FORM</h1>
<div class="container">
	<form action="{{ route('store') }}" method="post">
    {{ csrf_field() }}
		<label for="id">Student Id</label>
	<input type="text" name="id" id="id" placeholder="Student Id is..">

		<label for="Student_name">Student Name</label>
	<input type="text" name="Student_name" id="Student_name" placeholder="Student name..">

	<label for="Subject_code">Subject Code</label>
<input type="text" name="Subject_code" id="Subject_code" placeholder="Subject code is..">

	<label for="first_tt_marks">First Term Test Marks</label>
	<input type="text" name="first_tt_marks" id="first_tt_marks" placeholder="First Term test Marks..">

	<label for="second_tt_marks">Second Term Test Marks</label>
	<input type="text" name="second_tt_marks" id="second_tt_marks" placeholder="Second Term test Marks..">

    <label for="first_part_marks">First part Marks</label>
	<input type="text" name="first_part_marks" id="first_part_marks" placeholder="First part Marks..">

     <label for="second_part_marks">Second part Marks</label>
	<input type="text" name="second_part_marks" id="second_part_marks" placeholder="Second part Marks..">

	 <label for="attendence_marks">Class Attendence Marks</label>
	<input type="text" name="attendence_marks" id="attendence_marks" placeholder="Class Attendence Marks..">

     <label for="Comments">Comments</label>
	<textarea name="Comments" id="Comments" placeholder="Write something..." style="height: 200px">
	</textarea>

    <input type="submit"  value="Submit">

	</form>
</div>

</body>
</html>
