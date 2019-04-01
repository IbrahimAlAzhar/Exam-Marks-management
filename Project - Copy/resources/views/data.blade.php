<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exam Marks</title>
    <link rel="stylesheet" type="text/css" href="css/style6.css">

    <style>
    table{
      font-family: arial,sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    td,th{
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }
    tr:nth-child(even){
      background-color: #dddddd;
    }
    </style>

  </head>

  <body>
    <h1>Your Marks is in this course:</h1>
     <h2>To convert the result sheet into pdf</h2>

     <div class="button">
       <a href="{{route('pdf')}}" class="btn">To Convert Into PDF</a>
     </div>
      <br>
      <br>
      <br>
    <table >
      <tr>
          <th>Student Id</th>
        	<th>Student Name</th>
          <th>Subject Code</th>
        	<th>First TT marks</th>
          <th>Second TT marks</th>
        	<th>First Part Marks</th>
          <th>Second Part Marks</th>
        	<th>Attendence Marks</th>
          <th>Comments</th>
      </tr>

      @foreach ($students as $s)
      <tr>
        <td>{{ $s->id }}</td>
        <td>{{ $s->Student_name }}</td>
        <td>{{ $s->Subject_code }}</td>
        <td>{{ $s->first_tt_marks }}</td>
        <td>{{ $s->second_tt_marks }}</td>
        <td>{{ $s->first_part_marks }}</td>
        <td>{{ $s->second_part_marks }}</td>
        <td>{{ $s->attendence_marks }}</td>
        <td>{{ $s->Comments }}</td>

      </tr>
      @endforeach

    </table>

  </body>
</html>
