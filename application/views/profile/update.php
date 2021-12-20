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
                <div class="row">
                    <div class="col-lg-8">
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="email" name="email" value="" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Full name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" value="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-2">Picture</div>
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img src="#" class="img-thumbnail">
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="image">
                                            <label class="custom-file-label" for="image">Choose file</label>
                                        </div>
                                        <!-- <input type="file" name=""> -->
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </div>
                        </div>


                        </form>



                    </div>
                </div>




            </div>
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