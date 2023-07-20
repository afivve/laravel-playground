<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">UPK </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ url('propinsi') }}" class="btn btn-danger">Kembali</a>
        </div>
        <form action="{{ url('propinsi/update/' . $propinsi->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="provinceName" class="form-label">Nama Propinsi</label>
                <input type="text" class="form-control" name="nama_prop" value="{{ $propinsi->nama_prop }}">
            </div>
            <div class="mb-3">
                <label for="institutionName" class="form-label">Nama Lembaga</label>
                <input type="text" class="form-control" name="nama_lembaga" value="{{ $propinsi->nama_lembaga }}">
            </div>
            <button type="submit" class="btn btn-primary">Update Data</button>
        </form>
    </div>
</body>

</html>
