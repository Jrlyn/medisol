<?php
foreach ($apotek as $data_apt) {
?>
  <div class="bg-light py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-0"><a href="<?php echo base_url() ?>home">Home</a> <span class="mx-2 mb-0">/</span> <a href="<?php echo base_url() ?>product">Apotek</a> <span class="mx-2 mb-0">/</span> <strong class="text-black"><?php echo $data_apt->nama ?></strong></div>
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-md-5 mr-auto">
          <div class="border text-center">
            <img src="<?php echo base_url() ?>asset/apotek/<?php echo $data_apt->gambar ?>" alt="Image" class="img-fluid p-5">
          </div>
        </div>
        <div class="col-md-6">
          <h3 class="mb-0"><strong class="text-primary"><?php echo $data_apt->nama ?></strong></h3>
          <p><?php echo $data_apt->alamat ?></p>



          <!-- <p><a href="cart.html" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary">Add To Cart</a></p> -->

          <div class="mt-5">
            <ul class="nav nav-pills mb-3 custom-pill" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Daftar Obat</a>
              </li>

            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <table class="table custom-table" id="apotek_detail_obat">
                  <thead>
                    <th>Nama</th>
                    <th>Gambar</th>
                  </thead>
                  <tbody>
                    <?php
                    foreach ($daftar_obat as $u) {
                    ?>
                      <tr>
                        <th scope="row"><?php echo $u->nama ?></th>
                        <td><img src="<?php echo base_url() ?>asset/obat/<?php echo $u->gambar ?>" width="150" alt=""></td>
                      </tr>
                      <tr>
                      <?php
                    }
                      ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>


        </div>
        <div class="col-md-1">
          <a href="http://www.google.com/maps/place/<?php echo $data_apt->langitude ?>,<?php echo $data_apt->longitude ?>" target="_blank"><button type="button" class="btn btn-primary"><span class="icon-map-marker"></span></button></a>
        </div>
      </div>
    </div>
  </div>
  </div>
<?php }
?>