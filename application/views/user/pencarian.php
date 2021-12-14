<div class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-0"><a href="<?php echo base_url() ?>home">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Pencarian</strong></div>
    </div>
  </div>
</div>

<div class="site-section">
  <div class="container">
    <div class="row" style="margin-bottom: 10px;">
      <div class="col-md-12 text-center">
        <h3 class="h3 mb-5 text-black">Berikut hasil pencarian dengan menggunakan kata kunci "<?= $cari ?>"</h3>
      </div>
      <div class="col-md-12">
        <h4 class="h4 text-black">Daftar Obat</h4>
      </div>
      <?php
      if (count($daftar_obat) < 1) { ?>
        <div class="col-md-12 text-center">
          <p class="text-black">Data tidak ditemukan</p>
        </div>
      <?php } else { ?>
        <?php foreach ($daftar_obat as $u) { ?>

          <div class="col-sm-4 col-lg-3 text-center item mb-4 item-v2">
            <a href="<?php echo base_url() ?>product/detail?id=<?php echo $u->id ?>"> <img width="250" height="250" src="<?php echo base_url() ?>asset/obat/<?php echo $u->gambar ?>" alt="Image"></a>
            <h3 class="text-dark"><a href="<?php echo base_url() ?>product/detail?id=<?php echo $u->id ?>"><?php echo $u->nama ?></a></h3>
            <p class="price"><a href="<?php echo base_url() ?>product/detail?id=<?php echo $u->id ?>"><button type="button" class="btn btn-primary btn-md ">Detail</button></a></p>
          </div>
      <?php }
      } ?>
    </div>
  </div> <!-- end row -->
</div>

<hr>

<div class="site-section">
  <div class="container">
    <div class="row" style="margin-bottom: 10px;">
      <div class="col-md-12">
        <h4 class="h4 text-black">Daftar Lowongan</h4>
      </div>
      <?php
      if (count($daftar_lowongan) < 1) { ?>
        <div class="col-md-12 text-center">
          <p class="text-black">Data tidak ditemukan</p>
        </div>
      <?php } else { ?>
        <?php foreach ($daftar_lowongan as $da) { ?>
          <div class="col-md-6 mt-3">
            <div class="card">
              <div class="card-body">
                <h4 class="mb-0"><strong class="text-primary"><?php echo $da->judul_lowongan ?></strong></h4>
                <div><label for="c_lname" class="text-black"><?php echo $da->nama ?></label></div>
                <div><label for="c_lname" class="text"><?php echo $da->keterangan ?></label></div>
                <div>
                  <p for="c_lname" class="text"><?= date('d F Y', strtotime($da->tgl_awal)) ?> s/d <?= date('d F Y', strtotime($da->tgl_akhir)) ?></p>
                </div>
              </div>
            </div>
          </div> <!-- end col -->
      <?php }
      } ?>
    </div> <!-- end row -->
  </div>
</div>

<hr>

<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h4 class="h4 text-black">Daftar Apotek</h4>
      </div>
      <?php
      if (count($daftar_apotek) < 1) { ?>
        <div class="col-md-12 text-center">
          <p class="text-black">Data tidak ditemukan</p>
        </div>
      <?php } else { ?>
        <?php foreach ($daftar_apotek as $da) { ?>
          <div class="col-lg-4">
            <div class="text-center bg-light item mb-4 item-v2 border rounded">
              <img class="mt-3" width="300" height="150" src="<?php echo base_url() ?>asset/apotek/<?php echo $da->gambar ?>" alt="Image">
              <h3 class="mt-3"><strong class="text-primary"><?php echo $da->nama ?></strong></h3>
              <label class="text-black"><?php echo $da->alamat ?></label>
              <div class="row">
                <div class="col-md-6">
                  <a href="<?php echo base_url() ?>apotek/detail?id=<?php echo $da->id ?>"><button type="button" class="btn btn-primary">Detail</button></a>
                </div>
                <div class="col-md-6">
                  <a href="http://www.google.com/maps/place/<?= $da->langitude ?>,<?= $da->longitude ?>"><button type="button" class="btn btn-primary">Maps</button></a>
                </div>
              </div>
            </div>
          </div>
      <?php }
      } ?>
    </div>
  </div>
</div>