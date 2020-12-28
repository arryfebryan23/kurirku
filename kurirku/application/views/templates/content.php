    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
            <h1>Selamat Datang di Kurirku Express</h1>
            <h2>YOUR SMART EXPEDITION</h2>
            <div class="d-flex">
                <video width="400px" height="350px" controls>
                    <source src="<?= base_url('templateCustomer/assets/video/video1.MP4'); ?>" data-vbtype="video">
                </video>
                <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a> -->
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= Tracking Resi Section ======= -->
        <section id="portfolio" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <!-- Content Row -->
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?php echo base_url('assets/img/slider1.jpg') ?>" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo base_url('assets/img/slider2.png') ?>" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo base_url('assets/img/slider4.png') ?>" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div><br>

                <div class="section-title">
                    <h2>Tracking Resi</h2>
                    <p>Silahkan Cek Resi Anda</p>
                </div>
                <div class="form-group">
                    <strong> <label>Masukan Resi Anda</label> </strong>
                    <input type="text" name="resi" class="form-control" style="width: 35%;" placeholder="KK-">
                </div>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
                    Cek Resi
                </button>
            </div>
        </section>
        <!-- Tracking Resi Section -->

        <!-- ======= About Section ======= -->
        <!-- ======= Penjelasan Tentang Kurirku Express ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row justify-content-left">
                    <div class="col-lg-11">
                        <!-- <div class="row justify-content-end">
                            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="icofont-simple-smile"></i>
                                    <span data-toggle="counter-up">1000</span>
                                    <p>Happy Clients</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="icofont-clock-time"></i>
                                    <span data-toggle="counter-up">1</span>
                                    <p>Years of experience</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="icofont-group"></i>
                                    <span data-toggle="counter-up">1</span>
                                    <p>Lion Parcel</p>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 video-box align-self-baseline" data-aos="zoom-in" data-aos-delay="100">
                        <img src="templateCustomer/assets/img/kurirku.png" class="img-fluid" alt="">
                        <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a> -->
                    </div>

                    <div class="col-lg-6 pt-3 pt-lg-0 content">
                        <h3>Mengapa anda harus memilih Kurirku ?</h3>
                        <ul>
                            <br>
                            <li><i class="bx bx-check-double"></i>Pengiriman Cepat untuk Wilayah <b>JABODETABEK</b></li>
                            <li><i class="bx bx-check-double"></i> <b>Harga Terjangkau</b></li>
                            <li><i class="bx bx-check-double"></i> Tidak Perlu repot-repot datang ketempat pengiriman <b>Wasting Time</b></li>
                            <li><i class="bx bx-check-double"></i> Waktu Pengiriman <b>Sameday</b></li>
                        </ul>
                    </div>

                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= About Boxes Section ======= -->
        <section id="about-boxes" class="about-boxes">
            <div class="container" data-aos="fade-up">

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
        </section>
        <!-- End About Boxes Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Pilihan Paket</h2>
                    <!-- <p>Check our Services</p> -->
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-md-12">
                        <div class="icon-box">
                            <!-- <i class="icofont-box"></i> -->
                            <!-- <h4>Jenis Paket Reguler</h4> -->
                            <p>Untuk Wilayah JABODETABEK biaya pengiriman Rp. 9.000/Kg dengan waktu <b>sameday.</b></p>
                            <p>Untuk Wilayah diluar JABODETABEK biaya pengiriman Rp. 16.000/Kg.</p>
                        </div>
                    </div>
                    <!-- Pilihan Paket Kargo -->
                    <!-- <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="icofont-box"></i>
                            <h4>Jenis Paket Kargo</h4>
                            <p>Biaya pengiriman Rp. 25.000/5Kg dengan waktu <b>sameday.</b></p>
                            <br>
                            <br>
                            <br>
                            <br>
                        </div>
                    </div> -->

                </div>

            </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= Cek biaya Pengiriman ======= -->
        <section id="team" class="team section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Cek biaya Pengiriman</h2>
                </div>
                <b>
                    <h3>Maaf sedang maintenance, Untuk sementara layanan proses pengiriman Kurirku Express bisa hubungi : (NO HP/WA admin).</h3>
                </b>

                <!-- <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Kota Asal</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Kota Tujuan</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                </div>
                <center><button type="submit" name="cek" class="btn btn-warning mb-6">Cek Biaya Pengiriman</button></center> -->
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
                    </div>
                    <!-- <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="member">
                            <h4>Delivery Fee On Delivery (DFOD)</h4>
                            <span>jenis layanan pengiriman pada ekspedisi Kurirku Express si pengirim (seller) yang membayar ongkos kirim dan dibayar pada saat barang diterima oleh driver.</span>
                        </div>
                    </div> -->
                </div>


            </div>

            </div>

            </div>
        </section>
        <!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up"">

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
                        <h3>Hubungi</h3>
                        <p>+6282111990886</p>
                    </div>
                </div>


            </div>
        </section>
        <!-- End Contact Section -->

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