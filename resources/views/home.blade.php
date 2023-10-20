

<!DOCTYPE html>
<html>
<head>
    <title>Student Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

       /* #header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
*/
        #content {
            padding: 20px;
        }

        h1 {
            margin-top: 0;
        }

        p {
            margin-bottom: 10px;
        }

        .button {
            background-color: #4CAF50;
            border: none;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-right: 10px;
            cursor: pointer;
        }

        .button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<div id="header">
    <h1>Student Management System</h1>
</div>

<div id="content">
    <h2>Welcome to the Student Management System</h2>
    <p>This system allows you to View (students ,teachers,courses,batches,enrollments,payments)information and
        perform various tasks related to student management when you go to the page
        you can edit or delete or print the information you want to change.</p>

    <a href="{{url('students')}}" class="button">View Students</a>
    <a href="{{url('teachers')}}" class="button">View Teachers </a>
    <a href="{{url('courses')}}" class="button"> View Courses</a>
    <a href="{{url('batches')}}" class="button"> View Batches</a>
    <a href="{{url('enrollments')}}" class="button"> View Enrollments</a>
    <a href="{{url('payments')}}" class="button"> View Payments</a>

</div>
</body>
</html>
