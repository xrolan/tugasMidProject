<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Link Bootsrap css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- Link css --}}
    <link rel="stylesheet" href="/css/Navbar.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    {{-- Font Links --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <title>Website | Dashboard</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">
            <img src="/Assets/logo-website.png" alt="" width="30" class="d-inline-block align-text-top me-2">
            Website</a>
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

      <div class="form col-md-5 centered container-fluid mt-5">
        <form action="/dashboard/{{ $item->id }}" method="POST" class="align-center" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="input">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ $item->nama }}" required minlength="5" maxlength="20">
                @error('nama')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div> <br>

            <div class="input">
                <label for="umur" class="form-label">Umur</label>
                <input type="text" class="form-control @error('umur') is-invalid @enderror" id="umur" name="umur" value="{{ $item->umur }}" required min="20">
                @error('umur')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div><br>

            <div class="input">
                <label for="umur" class="form-label">Alamat</label>
                <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ $item->alamat }}" required minlength="10" maxlength="40">
                @error('alamat')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div><br>

            <div class="input">
                <label for="nohp" class="form-label">No Hp</label>
                <div class="input-group">
                    <span class="input-group-text" id="inputGroupPrepend2">08</span>
                <input type="text" class="form-control @error('nohp') is-invalid @enderror" id="nohp" aria-describedby="inputGroupPrepend2" name="nohp" value="{{ $item->nohp }}" required minlength="7" maxlength="10">
                </div>
                @error('nohp')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mt-4">Edit Activity</button>
      </form>
      </div>
</body>
</html>