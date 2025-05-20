<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengajuan Kontrak</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
            font-size: 13px;
        }
        .sidebar {
            background-color: #0d3b66;
        }
        .profile-img {
            width: 30%;
            border-radius: 50%;
        }
        .rating-box div {
            flex: 1;
            text-align: center;
        }
        .sidebar .nav-link:hover {
            background-color: #0b2742;
            border-radius: 12px;
        }

        input.form-control,
        textarea.form-control,
        select.form-control {
            font-size: 11px;
            padding: 5px;
        }



    </style>
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 sidebar d-flex flex-column p-3 text-white">
                <div class="d-flex align-items-center mb-3">
                    <img src="profil.png" class="profile-img mr-2">
                    <div>
                        <class="mb-0"> <b>User</b> <br>
                        <small>user@mail.com</small>
                    </div>
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white"><i class="fa-solid fa-book mr-2"></i>Helperlog</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white"><i class="fa-solid fa-magnifying-glass mr-2"></i>Helperfind</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white"><i class="fa-solid fa-handshake mr-2"></i>Helperassist</a>
                    </li>
                </ul>

                <button class="btn btn-primary d-flex align-items-center justify-content-center mt-auto" style="background-color: #4d7396; border: none; font-size: 13px;">
                    <i class="fa-solid fa-right-to-bracket mr-2"></i> Log Out
                </button>
            </nav>

            <main class="col-md-10 p-4">
                <h5><i class="fa fa-arrow-left mr-2"></i>Pengajuan Kontrak</h5>
                <div class="row mt-4">

                    <div class="col-md-5">
                        <div class=" p-3">
                            <img src="nagisa natsumi.png" class="card-img-top rounded mb-3" style="width:80%;">
                            <h5>Nagisa Natsumi</h5>
                            <class="text-muted">Perawat Lansia

                            <div class="d-flex justify-content-around p-3 border rounded bg-light">
                                <div style="text-align: center;">
                                    <h5>4</h5>
                                    Tahun Pengalaman
                                </div>
                                <div class="border-left pl-5" style="text-align: center;">
                                    <h5><i class="fa fa-star text-warning"></i> 4.6 </h5>
                                    Rating
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-5">
                        <div class="card p-4 shadow p-4 mb-4 bg-white">
                            <h6 class="mb-3">Form Pengajuan Kontrak</h6>
                            <form>
                                <div class="form-group">
                                    <label>Nama Pengaju</label>
                                    <input type="text" class="form-control" placeholder="Masukkan nama pengaju" >
                                </div>

                                <div class="form-group">
                                    <label>Alamat Pengaju</label>
                                    <textarea class="form-control" rows="4" placeholder="Masukkan alamat lengkap anda"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Penempatan Kerja</label>
                                    <select class="form-control" style="background-color: #bfbfbf;">
                                        <option value="Surabaya" selected>Surabaya</option>
                                        <option value="Jakarta">Jakarta</option>
                                        <option value="Bandung">Bandung</option>
                                        <option value="Yogyakarta">Yogyakarta</option>
                                        <option value="Malang">Malang</option>
                                    </select>
                                </div>

                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="checkDomicile">
                                    <label class="form-check-label" for="checkDomicile">
                                        Ajukan Penempatan di Luar Domisili
                                    </label>
                                </div>

                                <div class="form-group mt-2 h-49">
                                    <label>Rencana Masa Kontrak</label>
                                    <select class="form-control">
                                        <option>1 bulan</option>
                                        <option>3 bulan</option>
                                        <option>6 bulan</option>
                                        <option>1 tahun</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary btn-block mt-3" style="background-color: #0d3b66; font-size: 13px;">
                                    Ajukan Kontrak
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

</body>
</html>
