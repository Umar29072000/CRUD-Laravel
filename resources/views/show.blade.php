<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Data Students</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background: lightgray">
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <img src="/image/{{ $student->image }}" class="w-100 rounded">
                        <hr>
                        <h4>{{ $student->nama }}</h4>
                        <h4>{{ $student->nrp }}</h4>
                        <h4>{{ $student->alamat }}</h4>
                        <h4>{{ $student->instagram }}</h4>
                        <h4>{{ $student->linkedin }}</h4>
                        <h4>{{ $student->github }}</h4>
                        <h4>{!! $student->content !!}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>