<!-- php kirim email -->
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

$notif = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $saran = $_POST["saran"];

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "feleciangelique25@gmail.com";
        $mail->Password = "rqlz nhgh kqkb zwph"; // App Password!
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom("feleciangelique25@gmail.com", $nama);
        $mail->addAddress("feleciangelique25@gmail.com", "SMA Negeri 10 Bandar Lampung");

        $mail->Subject = "Pesan atau Saran untuk SMA Negeri 10 Bandar Lampung";
        $mail->Body = "Nama: $nama\nEmail: $email\nSaran: $saran";

        if ($mail->send()) {
            $notif = "<div style='background:#d4edda;color:#155724;padding:10px;margin-bottom:15px;border-radius:5px;'>✅ Pesan berhasil dikirim!</div>";
        } else {
            $notif = "<div style='background:#f8d7da;color:#721c24;padding:10px;margin-bottom:15px;border-radius:5px;'>❌ Gagal mengirim pesan.</div>";
        }

    } catch (Exception $e) {
        $notif = "<div style='background:#f8d7da;color:#721c24;padding:10px;margin-bottom:15px;border-radius:5px;'>❌ Terjadi kesalahan: {$mail->ErrorInfo}</div>";
    }
}
?>










<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Sekolah</title>
    <link rel="icon" href="foto/logo1.png" type="logo">

    <!-- css -->
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/5.3/examples/footers/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">


    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9; 
            color: #333;
        }
        .kontainer {
            max-width: 900px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff; 
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            gap: 20px; 
        }
        .kontak-kiri {
            flex: 1; 
        }
        .kontak-kanan {
            flex: 1; 
        }
        h1 {
            color: black;
        }
        p {
            margin-bottom: 15px;
            line-height: 1.6;
        }
        .kontak-info {
            margin-bottom: 20px;
        }
        .kontak-item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .kontak-item i {
            font-size: 24px;
            margin-right: 15px;
        }
        form {
            background-color: #f4f4f4; 
            padding: 20px;
            border-radius: 10px;
        }
        form label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        form input, form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        form button {
            background-color: #198654; 
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }
        form button:hover {
            background-color: #095c35; 
        }
    </style>
    
</head>



<!-- header -->

<body class="pb-0">

    <div id="header-top" class="container-fluid w-auto fixed-top top-0 p-0 py-lg-1 row text-bg-success justify-content-center">
      <div class="col-6 col-lg-2 border-end text-end"><i class="bi-envelope-at me-2"></i><a href="#" class="link-light link-opacity-50-hover link-underline-opacity-0">sma10@gmail.com</a></div>
      <div class="col-6 col-lg-2"><i class="bi-telephone me-2"></i><a href="tel:0721556542" class="link-light link-opacity-50-hover link-underline-opacity-0">0721556542</a></div>
      <div class="col-9 col-lg-4 border-end text-end"><i class="bi-geo-alt-fill me-1"></i><a href="https://maps.app.goo.gl/myRGETEnTep5f8kV8" class="link-light link-opacity-50-hover link-underline-opacity-0">Jalan Gatot Subroto No.81, Kota Bandar Lampung, Lampung</a></div>
      <div class="col-3 col-lg-1 h5 mt-lg-2"><a href="https://www.instagram.com/sman_10_bandar_lampung/"><span class="bi-instagram"></span></a>
      <a href="https://www.facebook.com/SMANDASA.Bandar.Lampung/"><span class="bi-facebook"></span></a>
      <a href="https://sman10bdl.sch.id/youtube.com"><span class="bi-youtube"></span></a>
    </div>
    </div>

    <header class="fixed-top p-2 position-sticky top-0 shadow-lg bg-light bg-gradient border-bottom border-1 border-dark-subtle">
      <nav class="navbar navbar-expand-md navbar-light">
        <div class="container">
          <div class="ms-lg-5">
            <img src="foto/logo.png" alt="Logo Sekolah" id="logo-img" style="width: 50px;">
          <h5 class="d-inline-block ms-3 text-black fw-bold fs-6 text">SMA NEGERI 10 BANDAR LAMPUNG</h5>
          </div>
          <button class="navbar-toggler border border-dark-subtle border-5" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
          <div class="fw-bold me-lg-5 fs-6 text">
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ms-4">
              <li class="nav-item">
                <a class="nav-link active text-black" aria-current="page" href="index.html">Beranda</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-black" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Tentang Kami
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item fw-bold" href="visimisi.html">Visi & Misi</a></li>
                  <li><a class="dropdown-item fw-bold" href="profil.html">Profil Sekolah</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link text-black" aria-current="page" href="Kegiatan.html">Kegiatan</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-black" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Informasi
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item fw-bold" href="fasilitas.html">Fasilitas</a></li>
                  <li><a class="dropdown-item fw-bold" href="prestasi.html">Prestasi</a></li>
                  <li><a class="dropdown-item fw-bold" href="berita.html">Berita</a></li>
                  <li><a class="dropdown-item fw-bold" href="pengumuman.html">Pengumuman</a></li>
                  <li><a class="dropdown-item fw-bold" href="alumni.html">Alumni</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link text-black" aria-current="page" href="galeri.html">Galeri</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link text-black" aria-current="page" href="kontak.php">Kontak</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>





<main>
    <div class="kontainer">
        
        <!-- Bagian Kiri -->
        <div class="kontak-kiri">
            <h1>Kontak Sekolah</h1>
            <p>Selamat datang di halaman kontak sekolah kami! Jika Anda memiliki pertanyaan atau membutuhkan informasi lebih lanjut, jangan ragu untuk menghubungi kami melalui informasi di bawah ini.</p>
            
            <div class="kontak-info">
                <div class="kontak-item">
                    <i class="fas fa-school"></i>
                    <p><strong>Nama Sekolah:</strong><br> SMA NEGERI 10 BANDAR LAMPUNG</p>
                </div>
                
                <div class="kontak-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <p><strong>Alamat:</strong><br> Jl. Gatot Subroto No.81, Tanjung Gading, Teluk Betung, Bandar Lampung</p>
                </div>

                <div class="kontak-item">
                    <i class="fas fa-envelope"></i>
                    <p><strong>Email:</strong><br> sma10@gmail.com</p>
                </div>

                <div class="kontak-item">
                    <i class="fas fa-phone-alt"></i>
                    <p><strong>Telepon:</strong><br> 0721556542</p>
                </div>

                <div class="kontak-item">
                    <i class="fas fa-clock"></i>
                    <p><strong>Jam Operasional:</strong><br> Senin - Jumat, 08.00 - 16.00 WIB</p>
                </div>

            </div>
        </div>

        <!-- Bagian Kanan -->
        <div class="kontak-kanan">
            <h2>Kirim Pesan atau Saran</h2>
            
          <!-- Notif PHP -->
          <?php echo $notif; ?>



            <!-- Formulir -->
            <form action="" method="post">
                <label for="nama">Nama:</label>
                <input type="nama" id="nama" name="nama" placeholder="Masukkan nama Anda" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>

                <label for="saran">Saran atau Pesan:</label>
                <textarea id="saran" name="saran" rows="5" placeholder="Tulis saran atau pesan Anda di sini..." required></textarea>

                <button type="submit">Kirim</button>
            </form>
        </div>

    </div>




    <!-- Footer -->
    <div style="background-color: #2c613d;" class="text-white">
        <div class="container">
          <footer class="py-5">
            <div class="row">
              <div class="col-12 col-lg-3">
                <img src="foto/logo.png" alt="Logo Sekolah" id="logo-img" style="width: 50px;" class="float-start me-2">
                <h5 class="text-start">SMA Negeri 10 <br> Bandar Lampung</h5>
                <p><small>SMA Negeri 10 Bandar Lampung hadir untuk memenuhi kebutuhan pendidikan di Indonesia. Pendidikan adalah kunci untuk membangun manusia demi menciptakan peradaban yang lebih baik.</small></p>
              </div>
        
              <div class="col-12 col-lg-3">
                <br>
                <h5>Alamat</h5>
                <div class="nav flex-column">
                  <li class="mb-2"><i class="bi-geo-alt-fill me-2"></i><a href="https://maps.app.goo.gl/myRGETEnTep5f8kV8" class="link-light link-underline-opacity-0"><small>Jalan Gatot Subroto No.81, Tanjung Gading, Teluk Utara Betung, Kedamaian, Tj. Gading, Kec. Kedamaian, Kota Bandar Lampung, Lampung 35226</small></a></li>
                  <li class="mb-2"><i class="bi-telephone me-2"></i><a href="tel:0721556542" class="link-light link-underline-opacity-0"><small>0721556542</small></a></li>
                  <li class="mb-2"><i class="bi-envelope-at me-2"></i><a href="#" class="link-light link-underline-opacity-0"><small>sma10@gmail.com</small></a></li>
                </div>
              </div>
            
              <div class="col-12 col-lg-2">
                <br>
                <h5>Menu</h5>
                <div class="nav flex-column">
                  <ul class="navbar-nav ms-4" style="list-style: square;">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="index.html">Beranda</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">Tentang Kami</a>
                      <ul class="sub-menu list-unstyled ms-3">
                        <li><a class="text-light link-underline link-underline-opacity-0"  href="visimisi.html">Visi & Misi</a></li>
                        <li><a class="text-light link-underline link-underline-opacity-0"  href="profil.html">Profil Sekolah</a></li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="Kegiatan.html">Kegiatan</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">Informasi</a>
                      <ul class="sub-menu list-unstyled ms-3">
                        <li><a class="text-light link-underline link-underline-opacity-0" href="fasilitas.html">Fasilitas</a></li>
                        <li><a class="text-light link-underline link-underline-opacity-0" href="prestasi.html">Prestasi</a></li>
                        <li><a class="text-light link-underline link-underline-opacity-0" href="berita.html">Berita</a></li>
                        <li><a class="text-light link-underline link-underline-opacity-0" href="pengumuman.html">Pengumuman</a></li>
                        <li><a class="text-light link-underline link-underline-opacity-0" href="alumni.html">Alumni</a></li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="galeri.html">Galeri</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="kontak.php">Kontak</a>
                    </li>
                  </ul>
                  </div>
              </div>
        
        
              <div class="col-8 col-lg-4 mt-4">
                  <h5>Lokasi</h5>
                  <div class="embed-responsive embed-responsive-4by3" style="height: 300px; width: 400px; overflow:hidden; border-radius: 4px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.920510349669!2d105.27436131579906!3d-5.429045726246248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40dbc845e0d2f5%3A0x860691387550694c!2sSMA%20Negeri%2010%20Bandar%20Lampung!5e0!3m2!1sid!2sid!4v1743829444082!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>      
                  </div>
                </div>
              </div>
            </div>
        
              <div class="d-flex flex-column flex-sm-row justify-content-between border-top">
                <p class="ms-5 mt-2">&copy;copyright 2025 SMA Negeri 10 Bandar Lampung</p>
                <ul class="list-unstyled d-inline-block mt-2 me-5">
                    <a class="h3 p-1" href="https://www.instagram.com/sman_10_bandar_lampung/"><span class="bi-instagram"></span></a>
                    <a class="h3 p-1" href="https://www.facebook.com/SMANDASA.Bandar.Lampung/"><span class="bi-facebook"></span></a>
                    <a class="h3 p-1" href="https://sman10bdl.sch.id/youtube.com"><span class="bi-youtube"></span></a>
                </ul>
              </div>
          </div>
            </footer>
    
    
    
    <!-- js -->
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>



</main>
</html>
