<!DOCTYPE html>
<html>
<head>
    <title>Kartu Berobat</title>
</head>
<body>
    <h1>Kartu Berobat</h1>
    <p><strong>Nama:</strong> {{ $patient->nama }}</p>
    <p><strong>NIM:</strong> {{ $patient->nim }}</p>
    <p><strong>Alamat:</strong> {{ $patient->alamat }}</p>
    <p><strong>Jurusan:</strong> {{ $patient->jurusan }}</p>
</body>
</html>
