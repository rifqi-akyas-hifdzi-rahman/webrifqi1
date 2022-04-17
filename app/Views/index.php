<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Hero Section-->
<section class="hero bg-cover bg-center py-5" id="hero" style="background: url(asset/img/rahr.png)">
      <div class="container py-5 my-5 z-index-20 position-relative">
        <div class="row py-lg-5 mt-5">
          <div class="col-md-8 text-white">
            <h2 class="h4 text-primary fw-normal mb-0">Halo, Saya</h2>
            <h1 class="text-uppercase text-xl mb-0">Rifqi Akyas <span class="text-primary">H. R.</span></h1>
            <h2 class="h4 fw-normal mb-5">Mahasiswa Teknik Inforatika UMMI</h2>
            <p class="text-shadow">Jangan menunggu hal-hal menjadi lebih mudah, lebih sederhana, lebih baik. Hidup akan selalu rumit. Hasilkan untuk menjadi sekarang. Jika tidak, Kita akan kehabisan waktu</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Tentang Section-->
    <section class="py-5 bg-light" id="Tentang">
      <div class="container py-5">
        <header class="mb-5">
          <h2 class="h3 lined">Tentang Saya</h2>
        </header>
        <p class="lead text-muted">“Profesional TI yang berorientasi detail dengan pengalaman 1 Minggu sebagai software support specialist dan system/network technician. Terampil dalam mengoperasikan berbagai platform, memiliki kemampuan komunikasi lisan dan verbal yang baik, dan mampu menjelaskan masalah software yang kompleks dalam istilah yang mudah dipahami.”</p>
        <p class="text-muted">“Profesional dengan pengalaman selama 1 minggu dalam pengembangan aplikasi ponsel berbasis Android. Terampil dalam kolaborasi antar tim, pemecahan masalah, dan manajemen proyek.”</p>
        <p class="text-muted mb-0">1 bulan pengalaman sebagai koordinator pengembangan bisnis dengan kemampuan berkolaborasi dengan tim penjualan, pemasaran, bisnis, dan produk</p>
      </div>
    </section>
    <!-- Keahlian Section        -->
    <section class="py-5" id="Keahlian">
      <div class="container py-5">
        <header class="mb-5 pb-4">

          <h2 class="text-uppercase lined">Keahlian</h2>
        </header>
        <div class="row gy-5">
          <div class="col-md-6">
            <h3 class="h4"><span class="text-primary me-2">01</span>Videografi</h3>
            <p class="text-muted text-sm ms-4 ps-3">videografi adalah media untuk merekam suatu moment atau kejadian yang dirangkum dalam sebuah sajian gambar dan suara yang dapat kita nikmati dikemudian hari baik sebagai sebuah kenangan ataupun sebagai bahan kajian untuk mempelajari apa yang sudah atau pernah terjadi</p>
          </div>
          <div class="col-md-6">
            <h3 class="h4"><span class="text-primary me-2">02</span>Photografi</h3>
            <p class="text-muted text-sm ms-4 ps-3">Fotografi adalah sebuah kegiatan atau proses menghasilkan suatu seni gambar/foto melalui media cahaya dengan alat yang disebut kamera dengan maksud dan tujuan tertentu</p>
          </div>
          <div class="col-md-6">
            <h3 class="h4"><span class="text-primary me-2">03</span>Sosial Media Designer</h3>
            <p class="text-muted text-sm ms-4 ps-3">Social media desainer adalah salah satu layanan ToffeeDev untuk mendesain konten berupa feeds, story maupun elemen media sosial lainnya. Layanan desain yang diberikan bersifat orisinil dan sesuai dengan branding perusahaan di media sosial.</p>
          </div>
          <div class="col-md-6">
            <h3 class="h4"><span class="text-primary me-2">04</span>Web Development</h3>
            <p class="text-muted text-sm ms-4 ps-3">Merancang, mendesain, mengembangkan dan memodifikasi situs web. Menganalisa kebutuhan pengguna untuk penerapan konten, grafis, fitur kerja, dan kapasitas pada sebuah situs Web internet/intranet/extranet.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Pendidikan Section-->
    <section class="py-5 bg-light" id="Pendidikan">
      <div class="container py-5">
        <header class="mb-5 pb-4">
          <h2 class="text-uppercase lined">Pendidikan</h2>
        </header>
        <!--  Timeline -->

        
        <ul class="timeline">
              <!-- Timeline item-->
              <?php foreach ($porto as $row): ?>
              <li class="timeline-item ms-3 pb-4">
                <div class="timeline-arrow"></div>
                <div class="row gx-0 gy-4">
                  <div class="col-lg-5">
                    <p class="fw-bold mb-2 text-primary text-sm"><?=$row['edu_in']?> - <?=$row['edu_out']?> </p>
                    <h2 class="h5 mb-0 text-uppercase"><?=$row['edu_name']?></h2>
                    <p class="text-sm mb-0"></p><span class="small text-muted"><?=$row['edu_detail']?></span>
                  </div>
                  <div class="col-lg-7">
                    <p class="text-muted"><?=$row['edu_addres']?></p>
                  </div>
                </div>
              </li>
              <?php endforeach; ?>
    </section>
    <!-- Pengalaman Section        -->
    <section class="py-5" id="Pengalaman">
      <div class="container py-5">
          <h2 class="text-uppercase lined">Pengalaman organisasi</h2>
        </header>
        <!--  Timeline -->
        <ul class="timeline">
              <!-- Timeline item-->
              <li class="timeline-item ms-3 pb-4">
                <div class="timeline-arrow"></div>
                <div class="row gx-0 gy-4">
                  <div class="col-lg-5">
                    <p class="fw-bold mb-2 text-primary text-sm">2020 – Sekarang </p>
                    <h2 class="h5 mb-0 text-uppercase">Unit Pers Mahasiswa</h2>
                    <p class="text-sm mb-0">Designer Sosial Media</p>
                  </div>
                  <div class="col-lg-7">
                    <p class="text-muted">Unit Pers Mahasiswa Adalah Sebuah Organisasi Pemberitaan Kampus Di Universitas Muhammadiyah Sukabumi .</p>
                  </div>
                </div>
              </li>
              <!-- Timeline item-->
              <li class="timeline-item ms-3 pb-4">
                <div class="timeline-arrow"></div>
                <div class="row gx-0 gy-4">
                  <div class="col-lg-5">
                    <p class="fw-bold mb-2 text-primary text-sm">2020 - Sekarang </p>
                    <h2 class="h5 mb-0 text-uppercase">Ikatan Mahasiswa Muhammadiyah</h2>
                    <p class="text-sm mb-0">Bidang kaderisasi</p>
                  </div>
                  <div class="col-lg-7">
                    <p class="text-muted">IMM adalah gerakan mahasiswa yang bergerak tiga bidang keagamaan, kemahasiswaan dan kemasyarakatan. Segala bentuk gerakan IMM tetap berlandaskan pada agama Islam yang hanif dan berkarakter rahmat bagi sekalian alam.</p>
                  </div>
                </div>
              </li>
              <!-- Timeline item-->
              <li class="timeline-item ms-3 pb-4">
                <div class="timeline-arrow"></div>
                <div class="row gx-0 gy-4">
                  <div class="col-lg-5">
                    <p class="fw-bold mb-2 text-primary text-sm">2020 - Sekarang </p>
                    <h2 class="h5 mb-0 text-uppercase">Dewan Perwakilan Mahasiswa Universitas Muhammadiyah Sukabumi</h2>
                    <p class="text-sm mb-0">Media Informasi Dan Komunikasi</p>
                  </div>
                  <div class="col-lg-7">
                    <p class="text-muted">organisasi eksekutif yang berkewajiban melakukan ketetapan dari SEMA kampus dalam mengatur dan melaksanakan kegiatan-kegiatan mahasiswa..</p>
                  </div>
                </div>
              </li>
        </ul>
      </div>
    </section>
    <!-- Pendidikan Section        -->
    <section class="bg-light py-5" id="Kontak">
      <div class="container py-5">
        <header class="mb-5 pb-4">
          <h2 class="text-uppercase lined">Kontak</h2>
        </header>
        <div class="row gy-4">
          <div class="col-lg-3 col-md-6"><a class="px-4 py-5 text-center Kontak-item shadow-sm reset-anchor d-block" href="#!"><i class="fas fa-map-marker-alt fa-2x mb-4"></i>
              <h4 class="Kontak-item-title h5 text-uppercase">Location</h4>
              <p class="text-sm mb-0">Cianjur, Jawa barat</p></a></div>
          <div class="col-lg-3 col-md-6"><a class="px-4 py-5 text-center Kontak-item shadow-sm reset-anchor d-block" href="tel:534456886"><i class="fas fa-map-marker-alt fa-2x mb-4"></i>
              <h4 class="Kontak-item-title h5 text-uppercase">Phone</h4>
              <p class="text-sm mb-0">+62 857 9466 6672</p></a></div>
          <div class="col-lg-3 col-md-6"><a class="px-4 py-5 text-center Kontak-item shadow-sm reset-anchor d-block" href="www.example.com"><i class="fas fa-map-marker-alt fa-2x mb-4"></i>
              <h4 class="Kontak-item-title h5 text-uppercase">Website</h4>
              <p class="text-sm mb-0">www.example.com</p></a></div>
          <div class="col-lg-3 col-md-6"><a class="px-4 py-5 text-center Kontak-item shadow-sm reset-anchor d-block" href="mailto:info@example.com"><i class="fas fa-map-marker-alt fa-2x mb-4"></i>
              <h4 class="Kontak-item-title h5 text-uppercase">Email</h4>
              <p class="text-sm mb-0">rifqiakyashifdzirahman29@gmail.com</p></a></div>
        </div>
      </div>
    </section>
    
    <?= $this->endSection(); ?>