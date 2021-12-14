<?php
foreach ($obat as $u) {
?>
  <div class="bg-light py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-0"><a href="<?php echo base_url() ?>home">Home</a> <span class="mx-2 mb-0">/</span> <a href="<?php echo base_url() ?>product">Product</a> <span class="mx-2 mb-0">/</span> <strong class="text-black"><?php echo $u->nama ?></strong></div>
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-md-5 mr-auto">
          <div class="border text-center">
            <img src="<?php echo base_url() ?>asset/obat/<?php echo $u->gambar ?>" alt="Image" class="img-fluid p-5">
          </div>
        </div>
        <div class="col-md-6">

          <h2 class="text-black"><?php echo $u->nama ?></h2>
          <h6 class="text-black">Indikasi</h6>
          <p><?php echo $u->indikasi ?></p>
          <h6 class="text-black">Komposisi</h6>
          <p><?php echo $u->komposisi ?></p>
          <h6 class="text-black">Dosis</h6>
          <p><?php echo $u->dosis ?></p>
          <h6 class="text-black">Perhatian</h6>
          <p><?php echo $u->perhatian ?></p>
          <h6 class="text-black">Efek Samping</h6>
          <p><?php echo $u->efek_samping ?></p>
          <h6 class="text-black">Kemasan</h6>
          <p><?php echo $u->kemasan ?></p>
          <h6 class="text-black">Manufaktur</h6>
          <p><?php echo $u->manufaktur ?></p>
          <h6 class="text-black">Keterangan</h6>
          <p><?php echo $u->keterangan ?></p>

        <?php }
        ?>


        </div>
      </div>
      <div class="row">

        <h3 class="text-black">Daftar Apotek untuk obat <?php echo $u->nama ?></h3>
        <table class="table custom-table">
          <thead>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Maps</th>
          </thead>
          <tbody>
            <?php
            foreach ($apotek as $u) {
            ?>
              <tr>
                <th scope="row"><?php echo $u->nama ?></th>
                <td><?php echo $u->alamat ?></td>
                <td><a href="http://www.google.com/maps/place/<?php echo $u->langitude ?>,<?php echo $u->longitude ?>" target="_blank"><button type="button" class="btn btn-primary btn-md ">Open</button></a></td>
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