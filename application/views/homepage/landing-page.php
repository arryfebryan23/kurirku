<!-- Hero Section -->
<section id="hero">
    <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
        <h1>Selamat Datang di Kurirku Express</h1>
        <h2>YOUR SMART EXPEDITION</h2>
        <div class="d-flex">
            <video width="400px" height="350px" controls>
                <source src="<?= base_url('assets/home/video/video1.MP4'); ?>" data-vbtype="video">
            </video>
            <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a> -->
        </div>
    </div>
</section>
<!-- End Hero -->

<main id="main">
    <!-- Cek Resi -->
    <section id="cek-resi" class="services section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Tracking Resi</h2>
                <p>Silahkan Cek Resi Anda</p>
            </div>
            <div class="form-group">
                <label><strong>Masukan Resi Anda</strong></label>
                <input type="text" name="resi" class="form-control" style="width: 35%;" placeholder="KK-">
            </div>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
                Cek Resi
            </button>
        </div>
    </section>
    <!-- End of Cek Resi Section -->

    <!-- Keunggulan -->
    <section id="keunggulan" class="about">
        <div class="col-md-12" data-aos="fade-up">
            <h3 class="mb-5">
                <center><strong>Mengapa anda harus memilih KurirKu? Layanan Unggulan</strong></center>
            </h3>
            <div class="row mx-5">
                <div class="container col-lg-6 p-4 content">
                    <ul>
                        <br>
                        <li><i class="bx bx-check-double"></i>Pengiriman Cepat untuk Wilayah <b>JABODETABEK</b></li>
                        <li><i class="bx bx-check-double"></i>Harga Lebih Terjangkau / <b>Affordable Prices</b></li>
                        <li><i class="bx bx-check-double"></i>Tidak Perlu repot-repot datang ketempat pengiriman <b>Wasting Time</b></li>
                        <li><i class="bx bx-check-double"></i>Pelayanan ramah / <b>Good Services</b></li>
                    </ul>
                </div>
                <div class="container col-lg-6 p-4 content">
                    <ul>
                        <br>
                        <li><i class="bx bx-check-double"></i>Biaya asuransi paket gratis / <b>Free Asurance</b></li>
                        <li><i class="bx bx-check-double"></i>Biaya pengiriman bisa dibayar nanti / <b>Pay Later</b></li>
                        <li><i class="bx bx-check-double"></i>Paket anda kami ambil kerumah / <b>Free Pick Up</b></li>
                        <li><i class="bx bx-check-double"></i>Paket sampai dalam satu hari / <b>Sameday</b></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Keunggulan -->

    <!-- Visi Misi -->
    <section id="visi-misi" class="about-boxes">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Visi dan Misi KurirKu</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="card">
                        <div class="card-icon">
                            <i class="ri-brush-4-line"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Our Mission</h5>
                            <p class="bx bx-chevron-right">Memberikan pelayanan yang cepat, ramah dan berkualitas. </p>
                            <p class="bx bx-chevron-right">Memberikan kemudahan pengiriman barang. </p>
                            <p class="bx bx-chevron-right">Menjaga keamanan barang sampai pada tangan konsumen. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="card">
                        <div class="card-icon">
                            <i class="ri-movie-2-line"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Our Vision</h5>
                            <p class="bx bx-chevron-right">Menjadi jasa pengiriman yang profesional dan tepat waktu. </p>
                            <p class="bx bx-chevron-right">Menjadi jasa pengiriman yang berkualitas. </p>
                            <p class="bx bx-chevron-right">Memaksimalkan potensi sumber daya manusia. </p>
                            <p class="bx bx-chevron-right">Mengembangkan pola kerja cerdas, cepat dan ikhlas. </p>
                        </div>
                        </img>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End of Visi Misi -->

    <!-- Cek Biaya -->
    <section id="cek-tarif" class="mb-0">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Cek biaya Pengiriman</h2>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-md-4">
                    <div class="form-group">
                        <label><strong>Alamat Asal</strong></label>
                        <input type="text" name="resi" class="form-control" placeholder="Origin" readonly>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label><strong>Alamat Tujuan</strong></label>
                        <input type="text" name="resi" class="form-control" placeholder="Destination" readonly>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label><strong>Berat Paket</strong></label>
                        <input type="text" name="resi" class="form-control" placeholder="1" readonly>
                    </div>
                </div>
                <div class="col-md-2">
                    <label></label>
                    <button type="button" class="btn btn-warning" style="margin-top: 30px;" disabled>
                        Cek Harga!
                    </button>
                </div>
            </div>

        </div>
    </section>
    <!-- End of Cek Biaya -->

    <!-- Pilihan Paket -->
    <section id="pilihan-paket" class="contact  mt-0">
        <div class="container" data-aos="fade-up">
            <center>
                <h2 class="m-0 mb-5">Pilihan Paket</h2>
            </center>
            <div class="row">
                <div class="col-md-6">
                    <div class="info-box mb-4">
                        <i class="icofont-box icofont-3x"></i>
                        <h3>Reguler</h3>
                        <p></p>
                        <p>Layanan pengiriman yang disediakan oleh KurirKu</p>
                        <p>ke seluruh wilayah Indonesia dengan harga yang terjangkau.</p>
                        <p></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-box">
                        <i class="icofont-truck-alt"></i>
                        <h3>Cargo</h3>
                        <p></p>
                        <p>Layanan pengiriman yang disediakan oleh KurirKu</p>
                        <p>dalam jumlah besar dengan harga yang terjangkau.</p>
                        <p></p>
                    </div>
                </div>
            </div>
            <!-- <div class="row" data-aos="fade-up" data-aos-delay="200">
                <div class="col-md-12">
                    <div class="icon-box">
                        <p>Untuk Wilayah JABODETABEK biaya pengiriman Rp. 9.000/Kg dengan waktu <b>sameday.</b></p>
                        <p>Untuk Wilayah diluar JABODETABEK biaya pengiriman Rp. 16.000/Kg.</p>
                    </div>
                </div>
            </div> -->
        </div>
    </section>
    <!-- End Services Section -->

    <!-- Jenis Pembayaran -->
    <section id="jenis-pembayaran" class="team section-bg">
        <div class="container" data-aos="fade-up">
            <br>
            <br>
            <div class="section-title">
                <h2>Jenis Pembayaran</h2>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <h4>Cash On Delivery (COD)</h4>
                        <p>Jenis layanan pengiriman pada ekspedisi Kurirku Express si pengirim (seller) tidak membayar ongkos kirim dan nanti biaya ongkos kirim akan dibebankan ke orang yang dituju (penerima).</p>
                    </div>
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <h4>Fee On Delivery (FOD)</h4>
                        <p>Jenis layanan pengiriman pada ekspedisi Kurirku Express si pengirim (seller) tidak membayar ongkos kirim dan nanti biaya ongkos kirim akan dibebankan ke orang yang dituju (penerima).</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Jenis Pembayaran Section -->

    <!-- Contact -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class=" section-title">
                <h2>Contact</h2>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="info-box mb-4">
                        <i class="bx bx-map"></i>
                        <h3>Kantor Pusat</h3>
                        <p>PT. Bina Sejahtera Gemilang</p>
                        <p>Jl. Akses Tol Cimanggis Cikeas No. 61 Leuwinanggung Kec. Tapos</p>
                        <p>Kota Depok. Jawa Barat, 16456</p>
                        <br>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-box">
                        <i class="bx bx-map"></i>
                        <h3>Kantor Cabang Bekasi</h3>
                        <p>Perumahan Permata Hijau Permai blok C</p>
                        <p>No. 36 RT006/RW017</p>
                        <p>Kel. Kaliabang tengah Kec. Bekasi Utara</p>
                        <p>Bekasi, Jawa Barat. Indonesia</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-box mt-4">
                        <i class="bx bx-envelope"></i>
                        <h3>Email Kami</h3>
                        <p>ekurirku@gmail.com</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-box mt-4">
                        <i class="bx bx-phone-call"></i>
                        <h3>Whatsapp</h3>
                        <p>+6282111990886</p>
                    </div>
                </div>


            </div>
    </section>
    <!-- End of Contact Section -->

</main>
<!-- End #main -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> <b>CEK RESI</b> </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <b>
                    <h3>Maaf sedang maintenance, Untuk sementara layanan proses pengiriman Kurirku Express bisa hubungi : (NO HP/WA admin).</h3>
                </b>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>