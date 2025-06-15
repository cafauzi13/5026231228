<!DOCTYPE html>
<html lang="en">

<head>
    <title>Annisa Nur Fauzi 5026231228</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous" />
    <!-- Google Fonts: Poppins  -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />

    <style>
        body {
            background: #d0f0e8;
            font-family: 'Poppins', sans-serif;
            color: #264653;
        }
        .navbar-nav .nav-link {
            color: #2a9d8f; /* Bootstrap teal-ish */
            font-weight: 600;
            transition: color 0.3s;
        }
        .navbar-nav .nav-link:hover {
            color: #1f776e; /* Darker teal on hover */
        }
        .jumbotron {
            background-color: #2a9d8f; /* Bootstrap 'success' teal, tapi lebih gelap */
            color: white;
            height: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 0.5rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 4px 10px rgba(42, 157, 143, 0.4);
        }
        .btn-custom {
            background-color: #2a9d8f;
            border: none;
            color: white;
            font-weight: 600;
            padding: 12px 24px;
            font-size: 1rem;
            border-radius: 0.375rem; /* Bootstrap btn rounded */
            width: 100%;
            transition: background-color 0.3s ease;
        }
        .btn-custom:hover {
            background-color: #1f776e;
        }
        .card-custom {
            border-radius: 0.5rem;
            box-shadow: 0 0.125rem 0.25rem rgb(0 0 0 / 0.075);
            padding: 2rem;
            background-color: #eaf6f5; /* Soft light teal */
            margin-bottom: 2rem;
            color: #264653;
        }
        .title {
            font-size: 2rem;
            font-weight: 700;
            color: #264653; /* Soft dark blue-green */
            margin-bottom: 1rem;
            text-align: center;
        }
        .subtitle {
            color: #6c757d; /* Bootstrap secondary */
            text-align: center;
            margin-bottom: 2rem;
        }
    </style>
</head>

<body>
    <div class="jumbotron">
        <h1 class="mb-0">Annisa Nur Fauzi 5026231228</h1>
    </div>

    <nav class="navbar navbar-expand-sm navbar-light bg-white shadow-sm mb-4">
        <div class="container">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/publishfrontend">All Front End</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pegawai">Pegawai</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/sofa">Tugas CRUD</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">EAS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/keranjang">Latihan 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/karyawan">Latihan 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/karyawan">Latihan 3</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
