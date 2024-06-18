<!DOCTYPE html>
<html>
<head>
    <title>Show College</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>

    </style>
</head>
<body>
<div class="container">
    <h1 class="mt-5">College Details</h1>
    <div class="card mt-4">
        <div class="card-header">
            <h3>{{ $college->collfullname }}</h3>
        </div>
        <div class="card-body">
            <h5 class="card-title">College Shortname:</h5>
            <p class="card-text">{{ $college->collshortname }}</p>
        </div>
    </div>

    <h2 class="mt-5">Departments:</h2>
    <ul class="list-group mt-4">
        @foreach ($college->departments as $department)
            <li class="list-group-item">
                <div class="row">
                    <div class="col-md-8">
                        <h5>Department ID:</h5>
                        <p>{{ $department->deptid }}</p>
                        <h5>Department Full Name:</h5>
                        <p>{{ $department->deptfullname }}</p>
                        <h5>Department Short Name:</h5>
                        <p>{{ $department->deptshortname }}</p>

                        <h5>Programs:</h5>
                        <ul>
                            @foreach ($department->programs as $program)
                                <li>
                                    Program Name: {{ $program->progfullname }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <!-- Add additional actions or links here if needed -->
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
</div>

<!-- Bootstrap JS (optional, for Bootstrap features like dropdowns) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
