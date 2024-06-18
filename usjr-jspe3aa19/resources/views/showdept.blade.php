



    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Departments</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styles can be added here */
        body {
            padding-top: 20px;
        }
        .container {
            max-width: 800px; /* Adjust as needed */
        }
        .mt-5 {
            margin-top: 3rem !important; /* Override Bootstrap's mt-5 class */
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="mt-5 mb-4">All Departments</h1>
    <ul class="list-group">
        @foreach ($departments as $department)
            <li class="list-group-item">
                <p><strong>Department ID:</strong> {{ $department->deptid }}</p>
                <p><strong>Department Full Name:</strong> {{ $department->deptfullname }}</p>
                <p><strong>Department Short Name:</strong> {{ $department->deptshortname }}</p>
                <p><strong>College Name:</strong> {{ $department->college->collfullname }}</p>
            </li>
        @endforeach
    </ul>
</div>

<!-- Bootstrap JS (optional, for Bootstrap features like dropdowns) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
