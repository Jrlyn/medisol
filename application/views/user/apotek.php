<div class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-0"><a href="<?php echo base_url() ?>home">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Apotek</strong></div>
    </div>
  </div>
</div>
<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="h3 mb-5 text-black">Daftar Apotek</h2>
      </div>
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
      <?php } ?>
    </div>
  </div>
</div>