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
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Create Form</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="#">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <select class="form-control" name="nama" id="nama">
                                            <option selected="" disabled="">--Pilih Nama Pegawai--</option>
                                            <!-- laukan looping data nama pegawai berdasarkan id -->
                                            <option value="">* value berdasarkan id, nama pegawai dilooping ya</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="c1">C1 (Kemampuan menjalin kerjasama dengan orang lain untuk penyelesaian tugasnya)</label>
                                        <select class="form-control" name="" id="">
                                            <option selected="" disabled="">--Pilih Kategori</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="c2">C2 (Kesabaran dan keramahan dalam melaksanakan tugas)</label>
                                        <select class="form-control" name="" id="">
                                            <option selected="" disabled="">--Pilih Kategori</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="c3">C3 (Keteladanan akhlaq)</label>
                                        <select class="form-control" name="" id="">
                                            <option selected="" disabled="">--Pilih Kategori</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="c4">C4 (Keikhlasan dalam bekerja)</label>
                                        <select class="form-control" name="" id="">
                                            <option selected="" disabled="">--Pilih Kategori</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="c5">C5 (Penyalahgunaan wewenang)</label>
                                        <select class="form-control" name="" id="">
                                            <option selected="" disabled="">--Pilih Kategori</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="c6">C6 (Kesesuaian laporan dengan hasil kerja)</label>
                                        <select class="form-control" name="" id="">
                                            <option selected="" disabled="">--Pilih Kategori</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="c7">C7 (Kemampuan menerima tanggung jawab yang diberikan padanya / amanah)</label>
                                        <select class="form-control" name="" id="">
                                            <option selected="" disabled="">--Pilih Kategori</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="c8">C8 (Kecakapan dan penguasaan bidang tugasnya)</label>
                                        <select class="form-control" name="" id="">
                                            <option selected="" disabled="">--Pilih Kategori</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="c9">C9 (Keterampilan yang dimiliki)</label>
                                        <select class="form-control" name="" id="">
                                            <option selected="" disabled="">--Pilih Kategori</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="c10">C10 (Ketekunan, ketelitian, dan kecepatan waktu dalam menjalankan tugas)</label>
                                        <select class="form-control" name="" id="">
                                            <option selected="" disabled="">--Pilih Kategori</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="c11">C11 (Kesehatan jasmani)</label>
                                        <select class="form-control" name="" id="">
                                            <option selected="" disabled="">--Pilih Kategori</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="c12">C12 (Manfaat kerja yang dilakukan)</label>
                                        <select class="form-control" name="" id="">
                                            <option selected="" disabled="">--Pilih Kategori</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="c13">C13 (Kemampuan menyelesaikan tugas sesuai dengan target atau program yang ada)</label>
                                        <select class="form-control" name="" id="">
                                            <option selected="" disabled="">--Pilih Kategori</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="c14">C14 (Ketepatan waktu dalam menyelesaikan tugas)</label>
                                        <select class="form-control" name="" id="">
                                            <option selected="" disabled="">--Pilih Kategori</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="c15">C15 (Keberadaan ditempat saat jam kerja)</label>
                                        <select class="form-control" name="" id="">
                                            <option selected="" disabled="">--Pilih Kategori</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="c16">C16(Perhatian terhadap kerja)</label>
                                        <select class="form-control" name="" id="">
                                            <option selected="" disabled="">--Pilih Kategori</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="c17">C17 (Keberanian dalam menjalankan amanah atau tanggung jawab)</label>
                                        <select class="form-control" name="" id="">
                                            <option selected="" disabled="">--Pilih Kategori</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="c18">C18 (Rasa kepemilikan terhadap barang klinik rawat inap dr. M. Suherman Universitas Muhammadiyah Jember)</label>
                                        <select class="form-control" name="" id="">
                                            <option selected="" disabled="">--Pilih Kategori</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="c19">C19 (Konsekwensi tugas)</label>
                                        <select class="form-control" name="" id="">
                                            <option selected="" disabled="">--Pilih Kategori</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="c20">C20 (Ketaatan menjalankan peraturan termasuk absensi, seragam, dan kedisiplinan lainnya)</label>
                                        <select class="form-control" name="" id="">
                                            <option selected="" disabled="">--Pilih Kategori</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="c21">C21(Ketaatan menjalankan tugas kedinasan)</label>
                                        <select class="form-control" name="" id="">
                                            <option selected="" disabled="">--Pilih Kategori</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="c22">C22 (Ketaatan menjalankan syariat islam)</label>
                                        <select class="form-control" name="" id="">
                                            <option selected="" disabled="">--Pilih Kategori</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="c23">C23 (Kemampuan menjalin kerjasama dengan orang lain untuk penyelesaian tugasnya)</label>
                                        <select class="form-control" name="" id="">
                                            <option selected="" disabled="">--Pilih Kategori</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="c24">C24 (Sikap terhadap orang lain)</label>
                                        <select class="form-control" name="" id="">
                                            <option selected="" disabled="">--Pilih Kategori</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="c25">C25 (Kemampuan untuk menerima saran dan kritik)</label>
                                        <select class="form-control" name="" id="">
                                            <option selected="" disabled="">--Pilih Kategori</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="c26">C26 (Inisiatif untuk bekerja secara baik)</label>
                                        <select class="form-control" name="" id="">
                                            <option selected="" disabled="">--Pilih Kategori</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="c27">C27 (Kreativitas kerja)</label>
                                        <select class="form-control" name="" id="">
                                            <option selected="" disabled="">--Pilih Kategori</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="c28">C28 (Keinginan untuk memberikan perubahan kerja yang lebih baik)</label>
                                        <select class="form-control" name="" id="">
                                            <option selected="" disabled="">--Pilih Kategori</option>
                                        </select>
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