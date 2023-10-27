<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Students</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background: lightgray">
    <div class="container mt-5 mb-5">
        <a href="/students" class="btn btn-primary mb-3">Kembali</a>
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="font-weight-bold">Nama</label>
                                <input type="text" class="form-control" name="nama" placeholder="Nama">
                            </div>
                            @error('nama')
                                <small style="color:red">{{ $message }}</small>
                            @enderror

                            <div class="form-group">
                                <label class="font-weight-bold">NRP</label>
                                <input type="text" class="form-control" name="nrp" placeholder="NRP">
                            </div>
                            @error('nrp')
                                <small style="color:red">{{ $message }}</small>
                            @enderror

                            <div class="form-group">
                                <label class="font-weight-bold">Alamat</label>
                                <input type="text" class="form-control" name="alamat" placeholder="Alamat">
                            </div>
                            @error('alamat')
                                <small style="color:red">{{ $message }}</small>
                            @enderror

                            <div class="form-group">
                                <label class="font-weight-bold">Instagram</label>
                                <input type="text" class="form-control" name="instagram" placeholder="Instagram">
                            </div>
                            @error('instagram')
                                <small style="color:red">{{ $message }}</small>
                            @enderror

                            <div class="form-group">
                                <label class="font-weight-bold">LinkedIn</label>
                                <input type="text" class="form-control" name="linkedin" placeholder="LinkedIn">
                            </div>
                            @error('linkedin')
                                <small style="color:red">{{ $message }}</small>
                            @enderror

                            <div class="form-group">
                                <label class="font-weight-bold">GitHub</label>
                                <input type="text" class="form-control" name="github" placeholder="GitHub">
                            </div>
                            @error('github')
                                <small style="color:red">{{ $message }}</small>
                            @enderror

                            <div class="form-group">
                                <label class="font-weight-bold">Konten</label>
                                <textarea name="content" cols="30" rows="5" class="form-control" placeholder="Konten"></textarea>
                            </div>
                            @error('content')
                                <small style="color:red">{{ $message }}</small>
                            @enderror

                            <div class="form-group">
                                <label class="font-weight-bold">Gambar</label>
                                <input type="file" class="form-control" name="image">
                            </div>
                            @error('image')
                                <small style="color:red">{{ $message }}</small>
                            @enderror

                            <div class="form-gorup">
                                <button type="submit" class="btn btn-md btn-primary">Submit</button>
                                <button type="reset" class="btn btn-md btn-warning">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('content');
    </script>
</body>

</html>