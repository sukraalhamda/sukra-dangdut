<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Pegawai</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f7f7f7;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 700px;
            margin: 0 auto;
            background: #ffffff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-top: 0;
        }

        .section {
            margin-bottom: 20px;
        }

        .section h3 {
            margin-bottom: 10px;
            color: #444;
        }

        ul {
            list-style: none;
            padding-left: 0;
        }

        ul li {
            background: #f0f0f0;
            padding: 5px 10px;
            margin-bottom: 5px;
            border-radius: 4px;
        }

        .label {
            font-weight: bold;
            color: #555;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Data Pegawai</h1>

        <div class="section">
            <p><span class="label">Nama:</span> {{ $name }}</p>
            <p><span class="label">Umur:</span> {{ $my_age }} tahun</p>
        </div>

        <div class="section">
            <h3>Hobi</h3>
            <ul>
                @foreach ($hobbies as $hobby)
                    <li>{{ $hobby }}</li>
                @endforeach
            </ul>
        </div>

        <div class="section">
            <p><span class="label">Tanggal Harus Wisuda:</span> {{ $tgl_harus_wisuda }}</p>
            <p><span class="label">Sisa Waktu Hingga Wisuda:</span> {{ $time_to_study_left }} hari</p>
        </div>

        <div class="section">
            <p><span class="label">Semester Saat Ini:</span> {{ $current_semester }}</p>
