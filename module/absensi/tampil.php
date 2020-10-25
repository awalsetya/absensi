 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Data Absensi</h4>
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
                           
                            <div class="table-responsive">
                                <table id="myTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Nama</th>
                                            <th>Status</th>
                                            <th>Jam Hadir</th>
                                            <th>Jam_pulang</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php
                                        include "./inc/koneksi.php";
                                        $tampil = mysqli_query($koneksi, "SELECT * FROM tb_pegawai,tb_absensi WHERE tb_pegawai.nip=tb_absensi.nip");
                                            $no=1;
                                            while($r=mysqli_fetch_array($tampil)){
                                            $tgl = explode(',',format_hari_tanggal($r['tgl_absensi']));
                                            ?>
                                        <tr>
                                            <td style="text-align:left;"><?php echo $no;?></td>
                                            <td style="text-align:left;"><?php echo "".$tgl[1];?></td>
                                            <td ><?php echo $r['nama'];?></td>
                                           <td ><?php 
                                                if (empty($r['jam_pulang'])) {
                                                    echo '<span class="font-medium label label-info label-rounded">Hadir</span>';
                                                }else {
                                                     echo '<span class="font-medium label label-warning label-rounded">Pulang</span>';
                                                }
                                           ?></td>
                                            <td style="text-align:left;"><?php echo $r['jam_masuk'];?></td>
                                            <td style="text-align:left;"><?php echo $r['jam_pulang'];?></td>
                                            
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