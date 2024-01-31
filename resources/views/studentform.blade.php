<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
    <style>
        body {
            background-color: lightsteelblue;
        }
    </style>
</head>

<body>
    <div class="container mt-5">

        <div class="card" style="background-color: lightseagreen">
            <div class="card-header">
                <h4> How to Insert Data in Laravel </h4>
            </div>

            <div class="card-body">
                <h5> Display Student Data </h5>
                <div class="row">
                    <div class="col-md-12 text-right">
                        <a href="/insertdata" class="btn btn-success badge-pill" style="width:80px"> ADD </a>
                    </div>
                </div>
                <br>

                <table class="table table-dark table-hover table-bordered">
                    <thead>
                        <tr>
                            <th scope="col"> ID </th>
                            <th scope="col"> Name </th>
                            <th scope="col"> Phone </th>
                            <th scope="col"> Email </th>
                            <th scope="col"> Course </th>
                            <th scope="col"> Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php include 'app/Http/Controllers/StudentController.php'; ?>
                        @foreach ($students as $student)
                            <tr>
                                <th> {{ $student->id }} </th>
                                <th> {{ $student->name }} </th>
                                <th> {{ $student->phone }} </th>
                                <th> {{ $student->email }} </th>
                                <th> {{ $student->course }} </th>

                                <td class="text-right">
                                    <a href="#" class="btn btn-primary badge-pill" style="width:80px;"> EDIT </a>
                                    <button class="btn btn-danger badge-pill" style="width:80px"> DELETE </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>

            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
            </script>
</body>

</html>
