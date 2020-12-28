  <!-- Need JS First -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

  <!-- Main Content -->
  <div class="main-content">
      <section class="section">
          <div class="section-header">
              <h1>End Transaction</h1>
          </div>

          <div class="section-body" id="form-search">
              <h2 class="section-title">Form Akhiri Perjalanan Paket</h2>
              <!-- <p class="section-lead">This page is just an example for you to create your own page.</p> -->
              <div class="card">
                  <form id="form-search">
                      <!-- Card Body -->
                      <div class="card-body">
                          <!-- Form Baris Ke-1 -->
                          <h5 class="text-primary">Masukkan No. Resi yang akan diakhiri</h5>
                          <hr>
                          <div class="row">
                              <div class="col-md-10">
                                  <div class="form-group">
                                      <input type="text" class="form-control" id="no_resi" name="no_resi" autofocus placeholder="Masukkan No Resi" required>
                                  </div>
                              </div>
                              <div class="col-md-2">
                                  <button class="btn btn-primary btn-lg col-md-12" id="btn-search" disabled>Cari Resi</button>
                              </div>
                          </div>
                      </div>
                      <!-- End of Card Body -->
                  </form>
              </div>
          </div>

          <div class="section-body" id="form-show">
              <div class="card">
                  <form action="<?= base_url('transaksiPaket/addTransaction'); ?>" method="POST">
                      <!-- Card Body -->
                      <div class="card-body">
                          <!-- Form Baris Ke-1 -->
                          <h5 class="text-primary">Data Pengirim dan Penerima</h5>
                          <hr>
                          <div class="form-group">
                              <label>No. Resi</label>
                              <input type="text" class="form-control" id="no_resi" name="no_resi" value="<?= $new_no_resi; ?>" requreadonly </div> <!-- Form Baris Ke-2 -->
                              <hr>
                              <div class="row">
                                  <!-- Left Side -->
                                  <div class="col-lg-6">
                                      <div class="form-group">
                                          <label>Nama Pengirim</label>
                                          <input type="text" class="form-control" id="nama_pengirim" name="nama_pengirim" value="" required>
                                      </div>
                                      <div class="form-group">
                                          <label>No. Telp Pengirim</label>
                                          <div class="input-group">
                                              <div class="input-group-prepend">
                                                  <div class="input-group-text">
                                                      <i class="fas fa-phone"></i>
                                                  </div>
                                              </div>
                                              <input type="number" min="0" class="form-control" id="no_telp_pengirim" name="no_telp_pengirim" value="" required>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label>Alamat Lengkap Pengirim</label>
                                          <textarea class="form-control" id="alamat_pengirim" name="alamat_pengirim" style="height: 80px;" required></textarea>
                                      </div>
                                  </div>
                                  <!-- End of Left Side -->
                                  <!-- Right Side -->
                                  <div class="col-lg-6">
                                      <div class="form-group">
                                          <label>Nama Penerima</label>
                                          <input type="text" class="form-control" id="nama_penerima" name="nama_penerima" value="" required>
                                      </div>
                                      <div class="form-group">
                                          <label>No. Telp Penerima</label>
                                          <div class="input-group">
                                              <div class="input-group-prepend">
                                                  <div class="input-group-text">
                                                      <i class="fas fa-phone"></i>
                                                  </div>
                                              </div>
                                              <input type="number" min="0" class="form-control" id="no_telp_penerima" name="no_telp_penerima" value="" required>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label>Alamat Lengkap Penerima</label>
                                          <textarea class="form-control" id="alamat_penerima" name="alamat_penerima" style="height: 80px;" required></textarea>
                                      </div>
                                  </div>
                                  <!-- End of Right Side -->
                              </div>

                              <!-- Form Baris Ke-3 -->
                              <div class="row">
                                  <!-- Left Side -->
                                  <div class="col-lg-6">
                                      <hr>
                                      <h5 class="text-primary">Detail Alamat Pengiriman</h5>
                                      <hr>
                                      <div class="form-group">
                                          <label>Provinsi</label>
                                          <select class="form-control" id="provinsi" name="provinsi">
                                              <option selected disabled>Pilih Provinsi</option>
                                              <?php foreach ($provinsi as $p) : ?>
                                                  <option value="<?= $p->id; ?> "><?= $p->name; ?></option>
                                              <?php endforeach; ?>
                                          </select>
                                      </div>
                                      <div class="form-group">
                                          <label>Kota/Kabupaten</label>
                                          <select class="form-control" id="kota_kabupaten" name="kota_kabupaten">
                                              <option selected disabled>Pilih Kota/Kabupaten</option>
                                          </select>
                                      </div>
                                      <div class="form-group">
                                          <label>Kecamatan</label>
                                          <select class="form-control" id="kecamatan" name="kecamatan">
                                              <option selected disabled>Pilih Kecamatan</option>
                                          </select>
                                      </div>
                                  </div>
                                  <!-- End of Left Side -->
                                  <!-- Right Side -->
                                  <div class="col-lg-6">
                                      <hr>
                                      <h5 class="text-primary">Detail Layanan Pengiriman</h5>
                                      <hr>
                                      <div class="form-group">
                                          <label>Jenis Layanan</label>
                                          <select class="form-control" id="jenis_layanan" name="jenis_layanan">
                                              <option selected disabled>Pilih Jenis Layanan</option>
                                              <option value="REG">Reguler</option>
                                              <option value="CRG">Cargo</option>
                                          </select>
                                      </div>
                                      <div class="form-group">
                                          <label>Jenis Pembayaran</label>
                                          <select class="form-control" id="jenis_pembayaran" name="jenis_pembayaran">
                                              <option selected disabled>Pilih Jenis Pembayaran</option>
                                              <option value="COD">Cash On Delivery</option>
                                              <option value="FOD">Fee On Delivery</option>
                                          </select>
                                      </div>
                                      <div class="form-group">
                                          <label>Berat</label>
                                          <div class="input-group">
                                              <div class="input-group-prepend">
                                                  <div class="input-group-text">
                                                      <i class="fas fa-weight"></i>
                                                  </div>
                                              </div>
                                              <input type="text" id="berat" name="berat" min="0" class="form-control">
                                              <div class="input-group-prepend">
                                                  <div class="input-group-text">
                                                      Kg
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <!-- End of Right Side -->
                                  </div>
                              </div>
                              <!-- End of Card Body -->

                              <hr>
                              <!-- Card Footer -->
                              <div class="card-footer px-0">
                                  <div class="row">
                                      <div class="col-lg-6">
                                          Total Biaya Ekspedisi : <b>Rp. <u id="harga-text">0</u></b>
                                      </div>
                                      <div class="col-lg-6 text-right">
                                          <button class="btn btn-lg btn-primary ">Submit</button>
                                      </div>
                                  </div>
                              </div>
                              <!-- End of Card Footer -->
                  </form>
              </div>
          </div>
      </section>
  </div>
  <!-- End of Main Content -->

  <script>
      $('#form-show').hide();

      $('#no_resi').keypress(function() {
          let no_resi = $('#no_resi').val();
          if (no_resi != '') {
              $('#btn-search').removeAttr('disabled');
          }
      })

      $('#form-search').submit(function() {
          let no_resi = $('#no_resi').val();
          console.log(no_resi);
      })


      $('#provinsi').change(function() {
          $.post('<?= base_url('TransaksiPaket/getKotaKabByProv/') ?>' + $(this).val(), {}, function(get) {
              let kota_kab = JSON.parse(get);

              // build form select kota kabupaten
              $("#kota_kabupaten").html('<option selected disabled>Pilih Kota/Kabupaten</option>');
              kota_kab.forEach(k => {
                  $("#kota_kabupaten").append('<option value="' + k.id + '">' + k.name + '</option>');
              });

              $("#kecamatan").html('<option selected disabled>Pilih Kecamatan</option>');
          });
      });

      $('#kota_kabupaten').change(function() {
          $.post('<?= base_url('TransaksiPaket/getKecByKotaKab/') ?>' + $(this).val(), {}, function(get) {
              let kecamatan = JSON.parse(get);

              //   build form select kota
              $("#kecamatan").html('<option selected disabled>Pilih Kecamatan</option>');
              kecamatan.forEach(k => {
                  $("#kecamatan").append('<option value="' + k.id + '">' + k.name + '</option>');
              });
          });
      });

      // hitung biaya ekspedisi berdasarkan berat barang
      $('#berat').keyup(function() {
          let berat = $('#berat').val();
          berat = parseFloat(berat);
          console.log(berat);

          if (isInt(berat) || isFloat(berat)) {
              let harga = Math.ceil(berat) * 9000;
              $('#harga-text').html(harga);
              $('#harga').val(harga);
          } else {
              $('#berat').val('');
              $('#harga-text').html('0');
              $('#harga').val('');
              alert('Input form berat harus dalam satuan angka.')
          }
      });

      function isInt(n) {
          return Number(n) === n && n % 1 === 0;
      }

      function isFloat(n) {
          return Number(n) === n && n % 1 !== 0;
      }
  </script>