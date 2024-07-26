<?php
// Konfigurasi koneksi database
$servername = "localhost";
$username = "root"; // ganti dengan username database Anda
$password = ""; // ganti dengan password database Anda
$dbname = "laravel"; // ganti dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mengambil data pasien
$sql = "SELECT nama, nim, alamat FROM pasien"; // ganti 'pasien' dengan nama tabel Anda
$result = $conn->query($sql);

// Inisialisasi array $pasien
$pasien = [];

if ($result->num_rows > 0) {
    // Mengambil data dari hasil query
    while($row = $result->fetch_object()) {
        $pasien[] = $row;
    }
} else {
    echo "0 hasil";
}

// Menutup koneksi
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FORMULIR PASIEN</title>

   <!--     Fonts and icons     -->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../ass/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../ass/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../ass/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../ass/assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>
<body>
  <br>
<h1 style="text-align: center; font-size: 24px;">KARTU BEROBAT MAHASISWA<br></h1>
<h1 style="text-align: center; font-size: 18px;">RUMAH SAKIT WAHID HASYIM</h1>
<hr>

<?php foreach ($pasien as $item): ?>
<div class="container text-center">
  
  <div class="row">
    <div class="col">
       <th class=" text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
          <div class="d-flex flex-column justify-content-center">
            <h6 class="mb-0 text-sm"><?= htmlspecialchars($item->nama) ?></h6>
          </div>
       </div>

    <div class="col">
       <th class=" text-secondary text-xxs font-weight-bolder opacity-7 ">NIM</th>
          <div class="d-flex flex-column justify-content-center">
            <h6 class="mb-0 text-sm"><?= htmlspecialchars($item->nim) ?></h6>
          </div>
        </div>

    <div class="col">
       <th class=" text-secondary text-xxs font-weight-bolder opacity-7">Alamat</th>
          <div class="d-flex flex-column justify-content-center">
            <h6 class="mb-0 text-sm"><?= htmlspecialchars($item->alamat) ?></h6>
          </div>
       </div>
  </div>

<BR></BR>
  <div class="row">
    <div class="col">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col" class="text-center" style="background-color: #f2f2f2;">Tanggal</th>
                    <th scope="col" class="text-center" style="background-color: #f2f2f2;">TTD Perawat</th>
                    <th scope="col" class="text-center" style="background-color: #f2f2f2;">Riwayat Penyakit</th>
                </tr>
            </thead>

            <tbody>
                @for ($i = 0; $i < 11; $i++)
                <tr>
                    <td class="text-center" style="height: 50px"> </td>
                    <td class="text-center" style="height: 50px"> </td>
                    <td class="text-center" style="height: 50px"> </td>
                </tr>
                @endfor
            </tbody>
        </table>
    </div>
  </div>
</div>
<?php endforeach; ?>
<script type="text/javascript">
	window.print();

 </script>
</body>
</html>

