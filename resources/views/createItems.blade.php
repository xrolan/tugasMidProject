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
            Website</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    </nav>


          <div class="form col-md-5 centered container-fluid mt-4">
            <form action="/dashboard" method="POST" class="align-center">
                @csrf
                <div class="inputActivity">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Enter Your nama" name="nama" required minlength="5" maxlength="20">
                    @error('nama')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                </div><br>
    
                <div class="inputActivity">
                    <label for="umur" class="form-label">Umur</label>
                    <input type="number" class="form-control @error('umur') is-invalid @enderror" id="umur" placeholder="Enter Your umur" name="umur" required min="20">
                    @error('umur')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                </div><br>

                <div class="inputActivity">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Enter Your alamat" name="alamat" required minlength="10" maxlength="40">
                    @error('alamat')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                </div><br>

                <div class="inputActivity">
                    <label for="nohp" class="form-label">No Hp</label>
                  <div class="input-group">
                    <span class="input-group-text" id="inputGroupPrepend2">08</span>
                    <input type="text" class="form-control @error('nohp') is-invalid @enderror" id="nohp" aria-describedby="inputGroupPrepend2" placeholder="Enter No Hp" name="nohp" required minlength="7" maxlength="10">
                  </div>
                    @error('nohp')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                </div>
    
                <button type="submit" class="btn btn-primary mt-4">Add Item</button>
              </form>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</html>