<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hasil</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">HR REKRUITASI</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="input.html">Input</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="list.html">List Pendaftar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pengumuman</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5 text-center">
        <h2>Hasil seleksi pegawai</h2>
    </div>
    <div class="container mt-5" style="display: flex; flex-direction: row;">
        <div class="nav flex-column nav-pills mr-4" id="v-pills-tab" role="tablist" aria-orientation="vertical"
            style="width: 150px;">
            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
                aria-controls="v-pills-home" aria-selected="true">Home</a>
            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab"
                aria-controls="v-pills-profile" aria-selected="false">Profile</a>
            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab"
                aria-controls="v-pills-messages" aria-selected="false">Messages</a>
            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab"
                aria-controls="v-pills-settings" aria-selected="false">Settings</a>
        </div>
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <table class="table table-hover ml-4" style="flex: 2;">
                    <thead class="table-success">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama lengkap</th>
                            <th scope="col">No. Kependudukan</th>
                            <th scope="col">Divisi</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Mark</td>
                        </tr>
                    </tbody>
                </table>    
            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...
            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...
            </div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...
            </div>
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