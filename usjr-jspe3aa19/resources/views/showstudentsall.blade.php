


    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Students</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styles can be added here */
        body {
            padding-top: 20px;
            background-color: #f8f9fa; /* Example background color */
        }
        .container {
            max-width: 800px;
            background-color: #fff; /* White background for container */
            box-shadow: 0 0 10px rgba(0,0,0,0.1); /* Example box shadow */
            padding: 20px;
            border-radius: 5px;
            margin-top: 20px;
        }
        .student-item {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fff;
        }
        .student-item:hover {
            background-color: #f0f0f0;
        }
        .student-name {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .student-details {
            font-size: 16px;
            margin-bottom: 5px;
        }
        .btn-show {
            font-size: 14px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="mb-4">All Students</h1>
    <ul class="list-unstyled">
        @foreach($students as $student)
            <li class="student-item">
                <div class="student-name">{{ $student->studfirstname }} {{$student->midname}} {{ $student->studlastname }}</div>
                <div class="student-details">Year: {{ $student->studyear }}</div>
                <a href="{{ route('student.show', ['id' => $student->studid]) }}" class="btn btn-primary btn-show">Show Details</a>
            </li>
        @endforeach
    </ul>
</div>

<!-- Bootstrap JS (optional, for Bootstrap features like dropdowns) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
