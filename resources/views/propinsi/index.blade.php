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
            <a href="{{ url('propinsi/create') }}" class="btn btn-primary">Tambah Data</a>
        </div>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Nomer</th>
                    <th>Nama Propinsi</th>
                    <th>Nama Lembaga</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $nomer = 1;
                @endphp
                @foreach ($propinsi as $prop)
                    <tr>
                        <td>{{ $nomer++ }}</td>
                        <td>{{ $prop->nama_prop }}</td>
                        <td>{{ $prop->nama_lembaga }}</td>
                        <td>
                            <a href="/propinsi/edit/{{ $prop->id }}" class="badge bg-warning">Edit</a>
                            <form action="/propinsi/delete/{{ $prop->id }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button onclick="return confirm('Yakin akan hapus data?')"
                                    class="badge bg-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
            </tbody>
            @endforeach
        </table>
    </div>

</body>

</html>
