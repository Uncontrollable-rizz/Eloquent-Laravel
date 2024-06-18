


    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styles can be added here */
        body {
            padding-top: 20px;
            background-color: #f8f9fa; /* Example background color */
        }
        .container {
            max-width: 600px;
            background-color: #fff; /* White background for container */
            box-shadow: 0 0 10px rgba(0,0,0,0.1); /* Example box shadow */
            padding: 20px;
            border-radius: 5px;
            margin-top: 20px;
        }
        .btn-back {
            margin-top: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="mb-4">Student Details</h1>
    <div class="card">
        <div class="card-body">
            <p class="card-text"><strong>Name:</strong> {{ $student->full_name }}</p>
            <p class="card-text"><strong>College ID:</strong> {{ $student->studcollid }}</p>
            <p class="card-text"><strong>Program ID:</strong> {{ $student->studprogid }}</p>
            <p class="card-text"><strong>Year:</strong> {{ $student->studyear }}</p>
            <a href="{{ url('/show/students/all') }}" class="btn btn-primary btn-back">Back to All Students</a>
        </div>
    </div>
</div>

<!-- Bootstrap JS (optional, for Bootstrap features like dropdowns) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
