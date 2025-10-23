<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                                                
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kelembaban Tanah</th>
                                    <th>Cuaca</th>
                                    <th>Waktu</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 0;
                                $query = mysqli_query($koneksi, "SELECT * FROM data");
                                while ($mhs = mysqli_fetch_array($query)) {
                                    $no++;
                                ?>
                                    <tr>
                                        <td width=5%><?php echo $no; ?></td>
                                        <td><?php echo $mhs['tanah']; ?></td>
                                        <td><?php echo $mhs['cuaca']; ?></td>
                                        <td><?php echo $mhs['waktu']; ?></td>
                                        <td><?php echo $mhs['tanggal']; ?></td>                                                                     
                                    </tr>
                                <?php } ?>
                            </tbody>

                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>

 
       