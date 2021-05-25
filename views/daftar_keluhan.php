<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Keluhan</h6>
        </div>
        <div class="card-body">
            <?php
                if(isset($_SESSION['flash']))
                {
                    echo '<div class="alert alert-success">';
                    echo $_SESSION['flash'];
                    echo '</div>';
                    unset ($_SESSION['flash']);
                }
            ?>
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <a href="?TambahKeluhan" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"  style="text-align:right;"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data</a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pelanggan</th>
                            <th>Tanggal</th>
                            <th>Keluhan Pelanggan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if($keluhan != null){
                                $no = 1;                            
                                foreach($keluhan as $row){
                        ?>
                            <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $row['nama_pelanggan'] ?></td>
                            <td><?= $row['tanggal'] ?></td>
                            <td><?= $row['keluhan_pelanggan'] ?></td>
                            <?php if($row['status'] == 'PENDING'){ ?>
                                <td>
                                    <a class="btn badge-pill badge-danger" 
                                        href="?UpdateStatusKeluhan=0&sid=<?php echo $row['id'] ?>&sval=<?php echo $row['status'] ?>">
                                            <?= $row['status'] ?>
                                    </a>
                                </td>
                            <?php } else { ?>
                                <td>
                                    <a class="btn badge-pill badge-success" disabled>
                                            <?= $row['status'] ?>
                                    </a>
                                </td>
                            <?php } ?>
                            <td>
                                <a href="?EditKeluhan=<?=$row['id']?>" class="btn btn-warning btn-circle">
                                    <i class="fas fa-hand-paper"></i>
                                </a>
                                <a onclick="javascript: return confirm('Anda yakin menghapus keluhan ?')"
                                    href="?HapusKeluhan=<?=$row['id']?>" class="btn btn-danger btn-circle">
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
<?php 
    include('layout/footer.php');
?>