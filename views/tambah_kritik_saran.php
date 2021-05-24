<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!--   <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Daftar Keluhan</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data</a>
    </div> -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Kritik & Saran</h6>
        </div>
        <div class="card-body">
            <form method = "POST" action ="#">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pelanggan</label>
                    <input type="text" class="form-control" name="nama_pelanggan" placeholder="Masukkan Nama Pelanggan" required>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlFile1">Deskripsi Kritik & Saran</label>
                    <textarea name="kritik_saran" class="form-control" placeholder="Masukkan Deskripsi Kritik & Saran" required></textarea>
                </div>
            
                <button type="submit" name="tambah_kritik_saran" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

<?php
    include('layout/footer.php');
?>