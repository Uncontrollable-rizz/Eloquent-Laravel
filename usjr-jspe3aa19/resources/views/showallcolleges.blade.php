

<!DOCTYPE html>
<html>
<head>
    <title>All Colleges</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>

    </style>
</head>
<body>
<div class="container">
    <h1 class="mt-5">All Colleges</h1>
    <ul class="list-group mt-4">
        @foreach($colleges as $college)
            <li class="list-group-item">
                <div class="row">
                    <div class="col-md-8">
                        <h5>College Fullname:</h5>
                        <p>{{ $college->collfullname }}</p>
                        <h5>College Shortname:</h5>
                        <p>{{ $college->collshortname }}</p>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('college.show', ['id' => $college->collid]) }}" class="btn btn-primary float-right">Show</a>
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
