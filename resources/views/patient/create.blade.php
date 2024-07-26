<!DOCTYPE html>
<html>
<head>
    <title>Formulir Kartu Berobat</title>
</head>
<body>
    <h1>Formulir Kartu Berobat</h1>
    <form action="{{ route('patients.store') }}" method="post">
        @csrf
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama"><br>
        <label for="nim">NIM:</label><br>
        <input type="text" id="nim" name="nim"><br>
        <label for="alamat">Alamat:</label><br>
        <textarea id="alamat" name="alamat"></textarea><br>
        <label for="jurusan">Jurusan:</label><br>
        <input type="text" id="jurusan" name="jurusan"><br><br>
        <input type="submit" value="Submit">
        <button type="button" onclick="window.location.href='{{ url('/') }}';">Back</button>
    </form>
</body>
</html>
