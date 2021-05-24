<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Kritik dan Saran</h6>
        </div>
        <div class="card-body">
            <?php
                if(isset($_SESSION['flash']))
                {
                    echo '<div class="alert alert-success">';
                    echo $_SESSION['flash'];
                    echo '</div>';
                }
            ?>
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <a href="?TambahKritikSaran" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data</a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pelanggan</th>
                            <th>Tanggal</th>
                            <th>Kritik Saran</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            if($kritik_saran != null){
                                $no = 1;                            
                                foreach($kritik_saran as $row){
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $row['nama_pelanggan'] ?></td>
                                <td><?= $row['tanggal'] ?></td>
                                <td><?= $row['kritik_saran'] ?></td>
                                <td>
                                    <a class="btn btn-primary btn-circle" 
                                        data-toggle="modal" 
                                        data-target="#modal-detail<?php echo $row['id']; ?>">
                                            <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="?EditKritikSaran=<?=$row['id']?>" class="btn btn-warning btn-circle">
                                        <i class="fas fa-hand-paper"></i>
                                    </a>
                                    <a onclick="javascript: return confirm('Anda yakin menghapus kritik & saran ?')"
                                        href="?HapusKritikSaran=<?=$row['id']?>" class="btn btn-danger btn-circle">
                                            <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php } }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<?php
    if($kritik_saran != null){
        $no = 1;                            
        foreach($kritik_saran as $row){
?>
<!-- Modal -->
<div class="modal fade" id="modal-detail<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Detail Keluhan</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered no-margin">
                    <tbody>
                        <tr>
                            <th>Nama Pelanggan</th>
                            <td><?= $row['nama_pelanggan'] ?></td>
                        </tr>
                        <tr>
                            <th>Tanggal</th>
                            <td><?= $row['tanggal'] ?></td>
                        </tr>
                        <tr>
                            <th>Kritik & Saran</th>
                            <td><?= $row['kritik_saran'] ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="button" data-dismiss="modal">Close</button>                
            </div>
        </div>
    </div>
</div>
<?php } }
    include('layout/footer.php');
?>