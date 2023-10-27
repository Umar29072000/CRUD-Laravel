<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Students</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Tutorial Laravel 10 untuk Pemula</h3>
                    <h3 class="text-center my-4">Umar Khoirul Afif - 1152000081</h3>
                    <h3 class="text-center my-4">Pemrograman Berbasis Web Lanjut</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="/students/create" class="btn btn-primary mb-3">Tambah Data</a>
                        @if ($message = Session::get('message'))
                            <div class="alert alert-success">
                                <strong>Berhasil</strong>
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">NRP</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Instagram</th>
                                        <th scope="col">LinkedIn</th>
                                        <th scope="col">Github</th>
                                        <th scope="col">Konten</th>
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($students as $student)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $student->nama }}</td>
                                            <td>{{ $student->nrp }}</td>
                                            <td>{{ $student->alamat }}</td>
                                            <td>{{ $student->instagram }}</td>
                                            <td>{{ $student->linkedin }}</td>
                                            <td>{{ $student->github }}</td>
                                            <td>{!! $student->content !!}</td>
                                            <td class="text-center">
                                                <img src="/image/{{ $student->image }}" alt="" class="img-fluid"
                                                    width="90">
                                            </td>
                                            <td class="text-center">
                                                <form action="{{ route('students.destroy', $student->id) }}"
                                                    method="POST">
                                                    <a href="{{ route('students.show', $student->id) }}"
                                                        class="btn btn-warning">Show</a>
                                                    <a href="{{ route('students.edit', $student->id) }}"
                                                        class="btn btn-warning">Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

</body>

</html>