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
                <?= $this->session->flashdata('message'); ?>
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
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-12">
                        <a href="<?= base_url('pegawai/create') ?>" type="submit" class="btn btn-secondary">Create</a>
                        <hr>
                        <!-- Card -->
                        <div class="card">
                            <!-- Card header -->
                            <div class="card-header">
                                <h3 class="card-title">Data table</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered table-hover" id="table_id">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Gender</th>
                                            <th>NIP</th>
                                            <th>TTL</th>
                                            <th>TMK</th>
                                            <th>Status</th>
                                            <th>Pendidikan</th>
                                            <th>Golongan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($pegawais as $pegawai) : ?>
                                            <tr>
                                                <td><?= $i; ?></td>
                                                <td><?= $pegawai['nama']; ?></td>
                                                <td><?= $pegawai['alamat']; ?></td>
                                                <td><?= $pegawai['gender']; ?></td>
                                                <td><?= $pegawai['nip']; ?></td>
                                                <td><?= $pegawai['ttl']; ?></td>
                                                <td><?= $pegawai['tmk']; ?></td>
                                                <td><?= $pegawai['status']; ?></td>
                                                <td><?= $pegawai['pendidikan']; ?></td>
                                                <td><?= $pegawai['golongan']; ?></td>
                                                <td>
                                                    <a href="<?= base_url('pegawai/update/'); ?><?= $pegawai['id_pegawai']; ?>" class="btn btn-small text-success"><i class="fa fa-edit"> Edit</i></a>
                                                    <a href="<?= base_url('pegawai/delete/'); ?><?= $pegawai['id_pegawai']; ?>" class="btn btn-small text-danger" onclick="return confirm('Delete this field ?')"><i class="fa fa-trash"> Delete</i></a>
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
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

<script>
    $(document).ready(function() {
        $('#table_id').DataTable();
    });
</script>

</body>

</html>