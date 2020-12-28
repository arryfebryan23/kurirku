      <!-- Begin Page Content -->
      <div class="container-fluid">

        <!-- Page Heading -->
        <div class="alert alert-warning" role="alert">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          HALAMAN DRIVER
        </div>

        <div class="alert alert-success" role="alert">
          <h4 class="alert-heading">SELAMAT DATANG!</h4>
          <p>Selamat Datang Driver <strong><?php echo $username; ?></strong>, Pada sistem <strong>EXPEDISI KURIRKU</strong>.</p>
        </div>

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

        <div class="card-deck">
          <div class="card" style="width: 16rem;">
            <img src="<?php echo base_url('assets/img/gambar11.png') ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-gray-800">PILIHAN PAKET</h5>
              <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
            </div>
          </div>
          <div class="card" style="width: 16rem;">
            <img src="<?php echo base_url('assets/img/gambar2.png') ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-gray-800">TENTANG KURIRKU EXPRES</h5>
              <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
            </div>
          </div>
          <div class="card" style="width: 16rem;">
            <img src="<?php echo base_url('assets/img/cs.png') ?>" class="card-img-top" alt="..." style="width: 55%">
            <div class="card-body">
              <h5 class="card-title text-gray-800">PELAYANAN</h5>
              <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
            </div>
          </div>


        </div>





      </div>

      <!-- Content Row -->


      <!-- /.container-fluid -->



      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; KURIRKU EXPRES </span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

      </div>
      <!-- End of Content Wrapper -->

      </div>
      <!-- End of Page Wrapper -->

      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
      </a>

      <!-- Logout Modal-->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
          </div>
        </div>
      </div>