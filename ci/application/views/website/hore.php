<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Website Sekolah</title>
</head>

<body>
    <!-- Navbar Awal -->

    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-info">
        <a class="navbar-brand text-white" href="#">Website Sekolah</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="#home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#visimisi">Visi Misi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#galeri">Galeri</a>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#alumni">Alumni</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo base_url ("admin/login") ?>">Login</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Navbar Akhir -->
    <!-- Jumbotron Awal -->
    <div class="jumbotron">
        <h1 class="display-4">SMK N 1 Gunung Kemungkus<h1>
                <p class="lead">Selamat Datang di SMK N 1 Gunung Kemungkus</p>
                <a class="btn btn-info" href="#" role="button">Hubungi Kami</a>
    </div>
    <!-- Jumbotron Akhir -->
    <!-- about awal -->

    <div id="about">
        <h1 class="text-center">About</h1>
        <hr white 500px>

        <div class="row p-3">
            <div class="col-md-6 text-center">
                <img src="<?php echo base_url(); ?>assets/gambar/visimisi.jpg" alt="" width="500px" height="500px">
            </div>
            <div class="col-md-6">
                <p class="text-justify">
                    <h4>Selamat datang di situs website resmi kami SMK N 1 GUNUNNG KEMUNGKUS</h4> 
                    Kami merasa sangat bangga memperkenalkan SMA N 1 Gunung Kemungkus, sebuah institusi pendidikan yang berdedikasi untuk
                    menginspirasi dan mendidik generasi muda dengan niai-nilai luhur dan pengetahuan yang komprehensif. terletak di Kecamatan Gunung Kemungkus Kabupaten Seragen,
                    sekolah ini menawarkan lingkungan belajar yang kondusif dan mendukung perkembangan akademik, sosial, dan emosional siswa.<br>

                    <h4>Program Akademik Dan Ekstrakurikuler</h4>
                    Kami menawarkan kurikulum yang berimbang antara teori dan praktik, yang dirancang untuk memenuhi standar pendidikan nasional dan internasional. 
                    Selain itu, SMA N 1 Gunung Kemungkus juga menyediakan berbagai program ekstrakurikuler yang meliputi olahraga, seni, sains, dan teknologi, yang bertujuan untuk mengembangkan bakat dan minat siswa di luar kelas. <br><br>
                    <h4>Fasilitas Sekolah </h4>
                    Kami memiliki fasilitas yang lengkap dan modern, termasuk laboratorium sains, perpustakaan, ruang komputer, lapangan olahraga, dan ruang seni. 
                    Semua fasilitas ini dirancang untuk mendukung pembelajaran yang interaktif dan menyenangkan.
                </p>
            </div>
        </div>

    </div>


    <!-- about akhir -->
    <!-- Visi misi awal -->
    <div id="visimisi">
        <h1 class="text-center">Visi Misi</h1>
        <hr white 500px>

        <div class="row p-3">
            <div class="col-md-6 ">
                <h3>Visi</h3>
                <hr white 200px>
                <p class="text-justify">
                    Menjadi lembaga pendidikan unggul yang menghasilkan generasi berkarakter, berprestasi, 
                    dan siap menghadapi tantangan global dengan berlandaskan pada nilai-nilai kearifan lokal dan keunggulan akademik.
                    <li>Unggul dalam Pendidikan berkomitmen untuk memberikan 
                        pendidikan berkualitas tinggi yang sesuai dengan standar nasional dan internasional.</li>
                    <li>Generasi berkarakter membangun siswa yang memiliki integritas, tanggung jawab,
                         dan etika yang kuat dalam kehidupan pribadi maupun profesional.</li>
                    <li>Berprestasi mendorong siswa untuk mencapai prestasi akademik dan non-akademik yang membanggakan di tingkat lokal, nasional, dan internasional.
                    </li>
                    <li>Siap menghadapi tantangan global membekali siswa dengan pengetahuan, keterampilan, dan sikap yang diperlukan untuk sukses di dunia yang terus berubah dan semakin terhubung secara global.
                    </li>
                    <li>Nilai-nilai kearifan lokal mengintegrasikan nilai-nilai budaya dan kearifan lokal dalam kurikulum dan kegiatan sekolah untuk membangun identitas dan rasa bangga akan warisan budaya.
                    </li>
                    <li>Keunggulan Akademik: Menciptakan lingkungan belajar yang inovatif dan inspiratif untuk mengembangkan potensi akademik siswa secara maksimal.</li>
                    
                </p>
            </div>
            <div class="col-md-6">
                <h3 class="text-center">Misi</h3>
                <hr white 200px>
                <p class="text-justify">
                <ul>
                    <li>Menyediakan Pendidikan Berkualitas:<br>
                        - Mengimplementasikan kurikulum yang inovatif dan berstandar tinggi yang menekankan pada keseimbangan antara teori dan praktik.<br>
                        - Memanfaatkan teknologi pendidikan terkini untuk mendukung proses belajar-mengajar yang efektif dan interaktif.
                     </li>
                    <li>Mengembangkan Karakter Siswa:<br>
                        - Menanamkan nilai-nilai moral dan etika melalui berbagai program dan kegiatan yang membangun integritas, tanggung jawab, dan sikap menghargai.<br>
                        - Membimbing siswa untuk menjadi individu yang disiplin, mandiri, dan berkomitmen pada keunggulan dalam segala aspek kehidupan.
                     </li>
                    <li>Mendorong Prestasi Akademik dan Non-Akademik:<br>
                        - Memfasilitasi berbagai kegiatan ekstrakurikuler dan kompetisi yang mendorong siswa untuk mengembangkan bakat dan minat mereka.<br>
                        - Memberikan penghargaan dan pengakuan atas prestasi siswa baik di bidang akademik maupun non-akademik.
                     </li>
                    <li>Mengintegrasikan Nilai-Nilai Kearifan Lokal:<br>
                        - Memperkenalkan dan melestarikan budaya lokal melalui kegiatan seni, budaya, dan sosial yang menjadi bagian integral dari kurikulum.<br>
                        - Mendorong siswa untuk menghargai dan mempraktikkan nilai-nilai kearifan lokal dalam kehidupan sehari-hari.
                     </li>
                    <li>Menciptakan Lingkungan Belajar yang Inovatif dan Inspiratif:<br>
                        - Menyediakan fasilitas belajar yang modern dan kondusif untuk mendukung proses pendidikan yang efektif.<br>
                        - Melakukan pelatihan dan pengembangan profesional bagi tenaga pendidik untuk memastikan mereka selalu up-to-date dengan metode pengajaran terbaik.
                     </li>
                </ul>
                </p>
            </div>
        </div>

    </div>
    <!-- Visi misi akhir -->
    <!-- Galeri Awal -->
    <div class="row-3" id="galeri" style="background-color: rgba(0, 0, 0, 0.582);">
        <div class="col-md-12 text-center">
            <h1 class="text-white mt-4">Galeri</h1>
            <h4 class="text-white">Daftar <?php echo base_url(); ?>assets/gambar kegiatan SMK N 1 Gunung Kemungkus</h4>
        </div>

        <div class="col-md-12 d-flex align-items-stretch card-group">
            <div class="card">
                <img src="<?php echo base_url(); ?>assets/gambar/belajar.jpeg"
                    class="card-img-top" alt="..."width="200px" height="250px">
                <div class="card-body">
                    <h5 class="card-title">Belajar dikelas</h5>
                    <p class="card-text"><?php echo base_url(); ?>assets/Gambaran suasan di kelas saat pelajaran sedang berlangsung, para guru bersemangat memberikan ilmu,
                        dan para siswa sangat antusias mengikuti pelajaran dari guru.
                    </p>
                </div>
            </div>
            <div class="card">
                <img src="<?php echo base_url(); ?>assets/gambar/p.jpeg"
                    class="card-img-top" alt="..." width="200px" height="250px">
                <div class="card-body">
                    <h5 class="card-title">Praktikum SMA n 1 Gunung Kemungkus</h5>
                    <p class="card-text">Kami juga sudah mengikuti program nasional yaitu ujian nasional berbasis komputer
                    </p>
                </div>
            </div>
            <div class="card">
                <img src="<?php echo base_url(); ?>assets/gambar/ol.jpeg"
                    class="card-img-top" alt="..."width="200px" height="250px">
                <div class="card-body">
                    <h5 class="card-title">Belajar Bootstrap 4</h5>
                    <p class="card-text">Siswa SMA N 1 Gunung kemungkus yang sedang melakukan kegiatan pelajaran olahraga </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Galeri Akhir -->
    <!-- ALumni Awal -->
    <div class="row-3" id="alumni" style="background-color: rgba(0, 0, 0, 0.582);">
        <div class="col-md-12 text-center">
            <h1 class="text-white mt-4">Alumni Sukses</h1>
            <h4 class="text-white">Daftar Alumni yang sudah melanjutkan pendidikan dan sudah bekerja</h4>
        </div>

        <div class="col-md-12 d-flex align-items-stretch card-group">
            <div class="card">
                <img src="<?php echo base_url(); ?>assets/gambar/deny.jpg"
                    class="card-img-top" alt="..." width="200px" height="400px">
                <div class="card-body">
                    <h5 class="card-title">Deny Saputra</h5>
                    <p class="card-text"><br>Nim 12221894<br>No telepon 083119762535s </p>
                </div>
            </div>
            <div class="card">
                <img src="<?php echo base_url(); ?>assets/gambar/sopi.jpg"
                    class="card-img-top" alt="..."width="200px" height="400px">
                <div class="card-body">
                    <h5 class="card-title">Romdhonn Shofie El Fikry</h5>
                    <p class="card-text">Nim 12221905 <br>No telepon 081239596822
                    </p>
                </div>
            </div>
            <div class="card">
                <img src="<?php echo base_url(); ?>assets/gambar/kuk.jpg"
                    class="card-img-top" alt="..."width="200px" height="400px">
                <div class="card-body">
                    <h5 class="card-title">Najib Khoirul Rizal</h5>
                    <p class="card-text">Nim 12221909<br>No telepon 085701691481</p>
                </div>
            </div>
            <div class="card">
                <img src="<?php echo base_url(); ?>assets/gambar/lana.jpg"
                    class="card-img-top" alt="..."width="200px" height="400px">
                <div class="card-body">
                    <h5 class="card-title">Muhammad Maulana Syarifudin</h5>
                    <p class="card-text">Nim 12221905 <br> No telpon 0882007836101</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Alumni akhir -->
    <!-- Contact Awal -->
    <div id="contact">
        <h1 class="text-center">Contact</h1>
        <hr white 500px>

        <div class="row p-3">
            <div class="col-md-6">
                <b>Hubungi Kami Disni</b>
                <p>Bila anda ingin mengetahui lebih lanjut bisa menghubungi kontak berikut ini.</p>
                <b>Nama Sekolah</b> <br>
                SMK N 1 Gunung Kemungkus <br>
                <b>Alamat</b> <br>
                Jalan Kali,Kec.Mancing,Kab.Mantap <br>
                <b>Email</b> <br>
                SMKN1GunungKemungkus@Gmail.com
            </div>
            <div class="col-md-6">
                <form>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Masukkan Email"> 
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Nama</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Masukkan Nama">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputAddress">Alamat</label>
                      <input type="text" class="form-control" id="inputAddress" placeholder="masukkan alamat">
                    </div>
                    <div class="form-group">
                      <label for="inputAddress2">Pesan</label>
                      <textarea type="text" class="form-control" id="inputAddress2" placeholder="masukkan pesan anda"></textarea>
                    </div>
                      
                    <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                  </form>

            </div>
        </div>

    </div>
    <!-- Contact Akhir -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>


</body>

</html>