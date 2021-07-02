<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Pendaftaran</title>
</head>

<body>
    <div class="section">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">HR REKRUITASI</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Input</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="list.html">List Pendaftar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="hasil.html">Pengumuman</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container mt-5 text-center">
            <h2>Form pendaftaran calon pegawai</h2>
        </div>
        <div class="container mt-5">
            <form action="{{route('rekruitasi.store')}}" method="POST">
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="ttl">Tanggal Lahir</label>
                        <input type="date" name="lahir" class="form-control" id="ttl" value="" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="ktp">No. Kependudukan</label>
                        <input type="number" name="ktp" class="form-control" id="ktp" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="pendidikan">Pendidikan</label>
                        <select class="custom-select" name="pendidikan" id="pendidikan" required>
                            <option selected disabled value="">Choose...</option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA/SMK</option>
                            <option value="KULIAH">KULIAH</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationDefault03">Divisi</label>
                        <select class="custom-select" name="divisi" id="divisi" required>
                            <option selected disabled value="">Choose...</option>
                            <option value="marketing">Marketing</option>
                            <option value="operasional">Operasional</option>
                            <option value="finance">Finance</option>
                            <option value="human resource">Human Resource</option>
                        </select>
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-3">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
            </form>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

</body>

</html>