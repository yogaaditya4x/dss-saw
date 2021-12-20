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
                <div class="card mb-3 col-lg-6">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="assets/img/pepeCry" class="card-img">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">yoga</h5>
                                <p class="card-text">email</p>
                                <p class="card-text"><small class="text-muted">Member sience </small></p>
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

</body>

</html>