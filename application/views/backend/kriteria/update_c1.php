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
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Update Form</h3>
                            </div>
                            <form action="">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" name="nama" placeholder="NAMA LENGKAP" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Pilihan</label>
                                        <input type="text" class="form-control" name="pilihan" placeholder="NAMA LENGKAP" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" name="nama" placeholder="NAMA LENGKAP" value="">
                                    </div>
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