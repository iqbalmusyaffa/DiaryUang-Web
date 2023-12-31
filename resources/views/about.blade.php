<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diary Uang</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@800&display=swap">
    <link rel="icon" href="{{ Vite::asset('resources/images/Diary Uang-01.png') }}">
    @vite('resources/sass/app.scss')
</head>
<body id="gradient3">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a href="{{ url('/') }}" class="navbar-brand mb-0 h1">
                <img class="img-fluid me-4" src="{{ Vite::asset('resources/images/Group 55.png') }}" alt="main logo">
            </a>

          <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ url('/') }}">Beranda&ensp;</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">&ensp;&ensp;|&ensp;&ensp;</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('/about') }}">&ensp;Tentang Kami</a>
              </li>
            </ul>
          </div>
        </div>
        </div>
    </nav>
    <!-- Container -->
    <div class="container py-5 px-4">
        <div class="row">
            <div class="col-md-5 order-md-2">
                <img class="img-fluid" src="{{ Vite::asset('resources/images/Diary Uang-01.png') }}" alt="main logo">
            </div>
            <div class="col-md-7 order-md-1">
                <br>
                <img class="img-fluid" src="{{ Vite::asset('resources/images/Diary Uang.png') }}" alt="main logo" width="300" height="50">
                <p class="fs-5 mt-3">"Diary Uang" adalah website yang dapat digunakan untuk mengetahui berapa total pengeluaran dan pemasukkan setiap harinya, juga mengetahui jumlah saldo yang dimiliki. Website ini terbentuk pada tahun 2023 oleh tim pengembang yang luar biasa. Kami hadir untuk membantu anda dalam mengelola keuangan.</p>
                <p class="fs-5 mt-3">Tidak usah khawatir dengan keamanan data anda karena kami mempunyai kebijakan privasi untuk tidak menyebarluaskan data pengguna dan hanya menggunakannya untuk kepentingan pengguna.</p>
                <p class="fs-5 mt-3">Kunjungi kami pada media sosial untuk mengetahui lebih lanjut tentang “Diary Uang” ini dan anda dapat bertanya-tanya mengenai website kami di media sosial.</p>
                <a href="{{ url('/') }}" class="h3">
                    <i class="bi bi-instagram">&ensp;Instagram Diary Uang</i>
                </a>
                <br>
            </div>
        </div>
    </div>
@vite('resources/js/app.js')
</body>
</html>


