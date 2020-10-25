 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Data Jabatan</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <button
                            class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i
                                class="ti-settings text-white"></i></button>
                        
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Data Table</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                           <a href="?page=jabatan&act=tambah" class="btn btn-primary mb-3"style="width:10%;margin-bottom:10px">Tambah</a>
                            <div class="table-responsive">
                                <table id="myTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Jabatan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php
                                        include "./inc/koneksi.php";
                                        $tampil = mysqli_query($koneksi, "SELECT * FROM tb_jabatan");
                                            $no=1;
                                            while($r=mysqli_fetch_array($tampil)){
                                            ?>
                                        <tr>
                                            <td style="text-align:left;"><?php echo $no;?></td>
                                            <td style="text-align:left;"><?php echo $r['nama_jabatan'];?></td>
                                            <td style="text-align:left;"><a href="?page=jabatan&act=ubah&id=<?php echo $r['id_jabatan'];?>">Ubah</a> | <a href="?page=pegawai&act=hapus&id=<?php echo $r['id_jabatan'];?>">Hapus</a></td>
                                        </tr>
                                        <?php
                                        $no++;
                                            }
                                        ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
            
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by themedesigner.in </footer>
        </div>