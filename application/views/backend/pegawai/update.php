<!-- Meta -->
<?php $this->load->view("backend/templates/meta") ?>

<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="<?= base_url("assets/dist") ?>/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <?php $this->load->view("backend/templates/navbar") ?>

    <!-- Sidebar -->
    <?php $this->load->view("backend/templates/sidebar") ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"><?php echo $page_title; ?></h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active"><?php echo $page_title; ?></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
                <a href="<?= base_url('pegawai/index') ?>" type="submit" class="btn btn-primary">Kembali</a>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-8">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Update Form</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="" method="POST">
                                <input type="hidden" name="id_pegawai" value="<?= $pegawai['id_pegawai']; ?>">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" name="nama" placeholder="NAMA LENGKAP" value="<?= $pegawai['nama']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" class="form-control" name="alamat" placeholder="ALAMAT LENGKAP" value="<?= $pegawai['alamat']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Gender / Jenis Kelamin</label>
                                        <input type="text" class="form-control" name="gender" placeholder="LAKI - LAKI / PEREMPUAN" value="<?= $pegawai['gender']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="nip">NIP (Nomer Induk Pegawai)</label>
                                        <input type="text" class="form-control" name="nip" placeholder="19xx.200x.0x.00x" value="<?= $pegawai['nip']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="ttl">TTL (Tempat Tanggal Lahir)</label>
                                        <input type="text" class="form-control" name="ttl" placeholder="City, dd/mm/yyyy" value="<?= $pegawai['ttl']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="tmk">TMK (Tanggal Masuk Kerja)</label>
                                        <input type="text" class="form-control" name="tmk" placeholder="Month Year" value="<?= $pegawai['tmk']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <input type="text" class="form-control" name="status" placeholder="PEGAWAI TETAP / TIDAK TETAP" value="<?= $pegawai['status']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Pendidikan</label>
                                        <input type="text" class="form-control" name="pendidikan" placeholder="S1/D4/D3/SMA" value="<?= $pegawai['pendidikan']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Golongan</label>
                                        <input type="text" class="form-control" name="golongan" placeholder="1/2/3" value="<?= $pegawai['golongan']; ?>">
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
                <!-- /.row -->

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Footer -->
    <?php $this->load->view("backend/templates/footer") ?>

</div>
<!-- ./wrapper -->

<!-- JS -->
<?php $this->load->view("backend/templates/js") ?>



</body>

</html>