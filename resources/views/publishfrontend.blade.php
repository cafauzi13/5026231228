<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Publish Frontend</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

{{-- Bootstrap 5 CDN --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    body {
        background: linear-gradient(to right, #e0f7f1, #f2fff9);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .card-custom {
        background-color: #ffffff;
        border: 1px solid #c6f6e9;
        border-radius: 20px;
        box-shadow: 0 6px 16px rgba(0, 128, 128, 0.15);
        padding: 2rem;
    }
    .btn-custom {
        background-color: #4fd1c5;
        border: none;
        color: white;
        font-weight: 500;
        padding: 12px 24px;
        font-size: 1rem;
        margin-bottom: 12px;
        width: 100%;
        border-radius: 10px;
        transition: all 0.3s ease;
    }
    .btn-custom:hover {
        background-color: #38b2ac;
        box-shadow: 0 4px 12px rgba(72, 187, 174, 0.3);
    }
    .title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #319795;
    }
    .subtitle {
        color: #6c757d;
    }
</style>

</head> <body> <div class="container py-5"> <div class="text-center mb-5"> <h1 class="title">🌿 Daftar Tugas Praktikum</h1> <p class="subtitle">5026231228 - Annisa Nur Fauzi</p> </div>

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card-custom">
            <a href="{{ url('/p1') }}" class="btn btn-custom">📘 Pertemuan 1</a>
            <a href="{{ url('/template1') }}" class="btn btn-custom">📝 Template Bootstrap</a>
            <a href="{{ url('/p4') }}" class="btn btn-custom">📙 Pertemuan 4</a>
            <a href="{{ url('/tugaslinktree') }}" class="btn btn-custom">🌐 Tugas Linktree</a>
            <a href="{{ url('/p7part1') }}" class="btn btn-custom">📕 Pertemuan 7 - Part 1</a>
            <a href="{{ url('/p7part2') }}" class="btn btn-custom">📗 Pertemuan 7 - Part 2</a>
            <a href="{{ url('/ets') }}" class="btn btn-custom">📝 ETS</a>

        </div>
    </div>
</div>


</div>
{{-- Optional Bootstrap JS --}}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> </body> </html>
