<div class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-0"><a href="<?php echo base_url() ?>home">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Lowongan</strong></div>
    </div>
  </div>
</div>

<div class="site-section">
  <div class="container">
    <div class="row" style="margin-bottom: 10px;">
      <div class="col-md-12">
        <h2 class="h3 mb-5 text-black">Daftar Lowongan</h2>
      </div>
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
      <?php
      } ?>
    </div> <!-- end row -->
  </div>
</div>