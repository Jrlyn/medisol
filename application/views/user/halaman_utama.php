    <div class="owl-carousel owl-single px-0">
      <div class="site-blocks-cover overlay" style="background-image: url('<?php echo base_url() ?>asset/front-end/images/hero_bg.jpg');">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 mx-auto align-self-center">
              <div class="site-block-cover-content text-center">
                <h1 class="mb-0"><strong class="text-primary">YOUR MEDICINE</strong> SOLUTION</h1>

                <div class="row justify-content-center mb-5">
                  <div class="col-lg-6 text-center">
                    <p>memberikan pelayanan informasi kefarmasian yang tepat</p>
                  </div>
                </div>

                <p><a href="<?= base_url('product') ?>" class="btn btn-primary px-5 py-3">Lihat Obat</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="site-blocks-cover overlay" style="background-image: url('<?php echo base_url() ?>asset/front-end/images/hero_bg_2.jpg');">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 mx-auto align-self-center">
              <div class="site-block-cover-content text-center">
                <h1 class="mb-0">YOUR MEDICINE <strong class="text-primary">SOLUTION</strong></h1>
                <div class="row justify-content-center mb-5">
                  <div class="col-lg-6 text-center">
                    <p>memberikan pelayanan informasi kefarmasian yang tepat</p>
                  </div>
                </div>
                <p><a href="<?= base_url('apotek/list') ?>" class="btn btn-primary px-5 py-3">Lihat Apotek</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>



    <div class="site-section py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="feature">
              <span class="wrap-icon flaticon-24-hours-drugs-delivery"></span>
              <h3><a href="#">Informasi lowongan terupdate</a></h3>
              <p>Temukan karyawan/pekerjaan dibidang apotek melalui website medisol</p>
              <p><a href="<?= base_url() ?>" class="d-flex align-items-center"><span class="mr-2">Lihat selengkapnya</span> <span class="icon-keyboard_arrow_right"></span></a></p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="feature">
              <span class="wrap-icon flaticon-medicine"></span>
              <h3><a href="#">Kontak apotek </a></h3>
              <p>Dapatkan informasi kontak apotek yang anda ingin hubungi</p>
              <p><a href="<?= base_url() ?>" class="d-flex align-items-center"><span class="mr-2">Lihat Selengkapnya</span> <span class="icon-keyboard_arrow_right"></span></a></p>
            </div>
          </div>          
        </div>
      </div>
    </div>


    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2>Medisol <strong class="text-primary">Products</strong></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 owl-carousel">
              <?php
              foreach ($daftar_obat as $u) {
              ?>

                <div class="text-center item mb-4 item-v2">
                  <!-- <span class="onsale">Sale</span>  -->
                  <a href="<?php echo base_url() ?>product/detail?id=<?php echo $u->id ?>"> <img width="300" height="450" src="<?php echo base_url() ?>asset/obat/<?php echo $u->gambar ?>" alt="Image"></a>
                  <h3 class="text-dark"><a href="<?php echo base_url() ?>product/detail?id=<?php echo $u->id ?>"><?php echo $u->nama ?></a></h3>                  
                  <p class="price"><a href="<?php echo base_url() ?>product/detail?id=<?php echo $u->id ?>"><button type="button" class="btn btn-primary btn-md ">Detail</button></a></p>
                </div>
              <?php }
              ?>

            </div>
          </div>
        </div>
        <div class="title-section text-center col-12">
          <a href="<?php echo base_url() ?>product"><button type="button" class="btn btn-primary btn-md center">View More</button></a>
        </div>


      </div>
    </div>

    <div class="site-section bg-image overlay" style="background-image: url('<?php base_url() ?>asset/front-end/images/hero_bg_2.jpg');">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-7">
            <h3 class="text-white">Daftarkan apotek anda dengan menekan tombol dibawah ini </h3>
            <!-- <p class="text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam.</p> -->
            <p class="mb-0"><a href="mailto:fjptech3@gmail.com" class="btn btn-outline-white">Email Sekarang</a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">

        <div class="row justify-content-between">
          <!-- <div class="col-lg-6">
            <div class="title-section">
              <h2>Happy <strong class="text-primary">Customers</strong></h2>
            </div>
            <div class="block-3 products-wrap">
              <div class="owl-single no-direction owl-carousel">

                <div class="testimony">
                  <blockquote>
                    <img src="<?php base_url() ?>asset/front-end/images/person_1.jpg" alt="Image" class="img-fluid">
                    <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus ratione sit quaerat unde.&rdquo;</p>
                  </blockquote>

                  <p class="author">&mdash; Kelly Holmes</p>
                </div>

                <div class="testimony">
                  <blockquote>
                    <img src="<?php base_url() ?>asset/front-end/images/person_2.jpg" alt="Image" class="img-fluid">
                    <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore
                      obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus ratione sit quaerat
                      unde.&rdquo;</p>
                  </blockquote>

                  <p class="author">&mdash; Rebecca Morando</p>
                </div>

                <div class="testimony">
                  <blockquote>
                    <img src="<?php base_url() ?>asset/front-end/images/person_3.jpg" alt="Image" class="img-fluid">
                    <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore
                      obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus ratione sit quaerat
                      unde.&rdquo;</p>
                  </blockquote>

                  <p class="author">&mdash; Lucas Gallone</p>
                </div>

                <div class="testimony">
                  <blockquote>
                    <img src="<?php base_url() ?>asset/front-end/images/person_4.jpg" alt="Image" class="img-fluid">
                    <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore
                      obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus ratione sit quaerat
                      unde.&rdquo;</p>
                  </blockquote>

                  <p class="author">&mdash; Andrew Neel</p>
                </div>

              </div>
            </div>
          </div> -->
          <div class="col-lg-12">
            <div class="title-section">
              <h2 class="mb-5">Why <strong class="text-primary">Us</strong></h2>
              <div class="step-number d-flex mb-4">
                <span>1</span>
                <p>Anda dapat mengetahui apotek yang menyediakan obat yang anda cari</p>
              </div>

              <div class="step-number d-flex mb-4">
                <span>2</span>
                <p>Informasi terpercaya dan terhindar dari informasi hoax</p>
              </div>

              <div class="step-number d-flex mb-4">
                <span>3</span>
                <p>Anda dapat terhubung dengan google maps untuk menujukan jalan apotek yang anda klik</p>
              </div>
              <div class="step-number d-flex mb-4">
                <span>4</span>
                <p>temukan informasi lowongan pekerjaan di bidang apotek</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>