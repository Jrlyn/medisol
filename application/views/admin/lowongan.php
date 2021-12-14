<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Lowongan</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="<?php echo base_url() ?>" class="text-muted">Home</a></li>
                            <li class="breadcrumb-item text-muted" aria-current="page"><a href="#">Lowongan</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-5 align-self-center">
                <div class="customize-input float-right">
                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-primary" data-toggle="modal" data-target="#tambah-modal">Tambah</button>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- basic table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <!-- <h4 class="card-title">Zero Configuration</h4>
                        <h6 class="card-subtitle">DataTables has most features enabled by default, so all you
                            need to do to use it with your own tables is to call the construction
                            function:<code> $().DataTable();</code>. You can refer full documentation from here
                            <a href="https://datatables.net/">Datatables</a>
                        </h6> -->
                        <?php
                        $this->load->helper('form');
                        $error = $this->session->flashdata('error');
                        if ($error) {
                        ?>
                            <div class="alert alert-danger fade show" role="alert"><?php echo $error; ?></div>
                        <?php }
                        $success = $this->session->flashdata('success');
                        if ($success) {
                        ?>
                            <div class="alert alert-success fade show" role="alert"><?php echo $success; ?></div>
                        <?php } ?>
                        <!-- <form class="pl-3 pr-3" action="<?php echo base_url() ?>apotek/lowongan_simpan" method="POST" enctype="multipart/form-data">


                            <div class="form-group">
                                <textarea class="form-control" rows="5" cols="9" id="editordata" name="lowongan"> <?php
                                                                                                                    foreach ($lowongan as $key) {
                                                                                                                        echo $key->keterangan;
                                                                                                                    } ?></textarea>
                            </div>

                            <div class="form-group text-center">
                                <button class="btn btn-primary" type="submit">Simpan</button>
                            </div>

                        </form> -->
                        <?php if ($this->session->userdata('role') != "admin") { ?>

                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Judul Lowongan</th>
                                            <th>Tanggal Awal Pembukaan Lowongan</th>
                                            <th>Tanggal Akhir Lowongan</th>
                                            <th>Spesifikasi Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbl_lowongan">
                                        <?php
                                        $no = 1;
                                        foreach ($lowongan as $u) { ?>
                                            <tr>
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $u->judul_lowongan ?></td>
                                                <td><?php echo $u->tgl_awal ?></td>
                                                <td><?php echo $u->tgl_akhir ?></td>
                                                <td><?php echo $u->keterangan ?></td>
                                                <td>
                                                    <a class="btn btn-rounded btn-danger" href="<?php echo base_url() ?>apotek/hapus_lowongan?id=<?php echo $u->id ?>">Hapus</a>
                                                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-primary edit_lowongan" data-id="<?php echo $u->id ?>" data-judul_lowongan="<?php echo $u->judul_lowongan ?>" data-tgl_awal="<?php echo $u->tgl_awal ?>" data-tgl_akhir="<?php echo $u->tgl_akhir ?>" data-keterangan="<?php echo $u->keterangan ?>">Ubah</button>
                                                </td>
                                            </tr>

                                        <?php
                                            $no++;
                                        } ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>No.</th>
                                            <th>Judul Lowongan</th>
                                            <th>Tanggal Awal Pembukaan Lowongan</th>
                                            <th>Tanggal Akhir Lowongan</th>
                                            <th>Spesifikasi Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        <?php } else { ?>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Apotek</th>
                                            <th>Judul Lowongan</th>
                                            <th>Tanggal Awal Pembukaan Lowongan</th>
                                            <th>Tanggal Akhir Lowongan</th>
                                            <th>Spesifikasi Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbl_lowongan">
                                        <?php
                                        $no = 1;
                                        foreach ($lowongan as $u) { ?>
                                            <tr>
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $u->nama ?></td>
                                                <td><?php echo $u->judul_lowongan ?></td>
                                                <td><?php echo $u->tgl_awal ?></td>
                                                <td><?php echo $u->tgl_akhir ?></td>
                                                <td><?php echo $u->keterangan ?></td>
                                                <td>
                                                    <a class="btn btn-rounded btn-danger" href="<?php echo base_url() ?>apotek/hapus_lowongan?id=<?php echo $u->id ?>">Hapus</a>
                                                    <button type="button" class="btn waves-effect waves-light btn-rounded btn-primary edit_lowongan" data-id="<?php echo $u->id ?>" data-id_apotek="<?php echo $u->id_apotek ?>" data-judul_lowongan="<?php echo $u->judul_lowongan ?>" data-tgl_awal="<?php echo $u->tgl_awal ?>" data-tgl_akhir="<?php echo $u->tgl_akhir ?>" data-keterangan="<?php echo $u->keterangan ?>">Ubah</button>
                                                </td>
                                            </tr>

                                        <?php
                                            $no++;
                                        } ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>No.</th>
                                            <th>Apotek</th>
                                            <th>Judul Lowongan</th>
                                            <th>Tanggal Awal Pembukaan Lowongan</th>
                                            <th>Tanggal Akhir Lowongan</th>
                                            <th>Spesifikasi Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
<!-- tambah modal content -->
<div id="tambah-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">
                <div class="text-center mt-2 mb-4">
                    <label for="title">Tambah Lowongan</label>
                </div>

                <form class="pl-3 pr-3" action="<?php echo base_url() ?>apotek/lowongan_tambah" method="POST" enctype="multipart/form-data">
                    <?php if ($this->session->userdata('role') == "admin") { ?>
                        <div class="form-group">
                            <label for="username">Apotek</label>
                            <select class="form-control" name="id_apotek">
                                <option selected>Select</option>
                                <?php foreach ($apotek as $a) { ?>
                                    <option value="<?php echo $a->id ?>"><?php echo $a->nama ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    <?php } ?>
                    <div class="form-group">
                        <label for="username">Judul Lowongan</label>
                        <input class="form-control" type="text" name="judul_lowongan" id="nama" required="" placeholder="Judul Lowongan">
                    </div>

                    <div class="form-group">
                        <label for="username">Tanggal Awal Pembukaan Lowongan </label>
                        <input class="form-control" type="date" name="tgl_awal" id="tgl_awal" required="" placeholder="Masukkan Tanggal Awal Pembukaan Lowongan">
                    </div>

                    <div class="form-group">
                        <label for="username">Tanggal Akhir Lowongan </label>
                        <input class="form-control" type="date" name="tgl_akhir" id="tgl_akhir" required="" placeholder="Masukkan Tanggal Akhir Lowongan ">
                    </div>

                    <div class="form-group">
                        <label for="username">Spesfikasi Keterangan</label>
                        <textarea class="form-control" rows="5" cols="9" id="editordata" name="keterangan"></textarea>
                    </div>



                    <div class="form-group text-center">
                        <button class="btn btn-primary" type="submit">Tambah</button>
                    </div>

                </form>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- edit modal content -->
<div id="edit-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">
                <div class="text-center mt-2 mb-4">
                    <label for="title">Edit Admin</label>
                </div>

                <form class="pl-3 pr-3" action="<?php echo base_url() ?>apotek/lowongan_edit" method="POST" enctype="multipart/form-data">
                    <?php if ($this->session->userdata('role') == "admin") { ?>
                        <div class="form-group">
                            <label for="username">Apotek</label>
                            <select class="form-control" name="edit_id_apotek" id="edit_id_apotek">
                                <option selected>Select</option>
                                <?php foreach ($apotek as $a) { ?>
                                    <option value="<?php echo $a->id ?>"><?php echo $a->nama ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    <?php } ?>

                    <div class="form-group">
                        <label for="username">Judul Lowongan</label>
                        <input class="form-control" type="text" name="edit_judul_lowongan" id="nama" required="" placeholder="Judul Lowongan">
                    </div>

                    <div class="form-group">
                        <label for="username">Tanggal Awal Pembukaan Lowongan </label>
                        <input class="form-control" type="date" name="edit_tgl_awal" id="tgl_awal" required="" placeholder="Masukkan Tanggal Awal Pembukaan Lowongan">
                    </div>

                    <div class="form-group">
                        <label for="username">Tanggal Akhir Lowongan </label>
                        <input class="form-control" type="date" name="edit_tgl_akhir" id="tgl_akhir" required="" placeholder="Masukkan Tanggal Akhir Lowongan ">
                    </div>

                    <div class="form-group">
                        <label for="username">Spesfikasi Keterangan</label>
                        <textarea class="form-control" rows="5" cols="9" id="edit_editordata" name="edit_keterangan"></textarea>
                    </div>



                    <div class="form-group text-center">
                        <input type="hidden" name="id">
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>

                </form>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->