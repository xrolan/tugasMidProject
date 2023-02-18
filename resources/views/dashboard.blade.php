<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/navbar.css">
    <title>Dashboard</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">
            <img src="/Assets/logo-website.png" alt="logo" width="35" class="d-inline-block align-text-top me-3">
            PT Meksiko
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div>
            <form action="/logout" method="post">
              @csrf
              <button type="submit" class="btn-logout">Log Out</button>
            </form>
          </div>
      </div>
    </nav>

    <div class="container col-lg-9">

      <table class="table table-hover mt-4">
        <h2 class="mt-1 mb-1">Simple Storage</h2>
        <a href="/dashboard/create" class="btn btn-primary mt-2">Add New Data</a>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Umur</th>
            <th scope="col">Alamat</th>
            <th scope="col">No Hp</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($items as $item)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->umur }}</td>
            <td>{{ $item->alamat }}</td>
            <td>08{{ $item->nohp }}</td>
            <td>
              <a href="/dashboard/{{ $item->id }}/edit" class="btn bg-warning"><i class="bi bi-pencil"></i></span></a>
              <form action="/dashboard/{{ $item->id }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn bg-danger border-0" onclick="return confirm('Are you sure to delete?')"><i class="bi bi-trash"></i></button>
              </form>
            </td>
          </tr>    
          @endforeach
        </tbody>
      </table>
    </div>

    
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</html>