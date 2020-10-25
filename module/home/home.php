<?php include "./inc/koneksi.php";?>

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard Admin</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <button
                            class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i
                                class="ti-settings text-white"></i></button>
                        <a href="#" target="_blank"
                            class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Buy
                            Admin Now</a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Dashboard Admin</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- Different data widgets -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div class="row row-in">
                                <div class="col-lg-3 col-sm-6 row-in-br">
                                    <ul class="col-in">
                                        <li>
                                            <span class="circle circle-md bg-danger"><i class="ti-clipboard"></i></span>
                                        </li>
                                        <?php 
                                        $datapegawai = mysqli_query($koneksi,"SELECT * FROM tb_pegawai");
                                        $jumlah_pegawai = mysqli_num_rows($datapegawai);
                                        
                                        ?>
                                        <li class="col-last">
                                            <h3 class="counter text-right m-t-15"><?php echo $jumlah_pegawai; ?></h3>
                                        </li>
                                        <li class="col-middle">
                                            <h4>Total pegawai</h4>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-danger" role="progressbar"
                                                    aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 40%">
                                                    <span class="sr-only">40% Complete (success)</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-sm-6 row-in-br  b-r-none">
                                    <ul class="col-in">
                                        <li>
                                            <span class="circle circle-md bg-info"><i class="ti-user"></i></span>
                                        </li>
                                        <?php 
                                        $datapegawai = mysqli_query($koneksi,"SELECT * FROM tb_pegawai WHERE kd_status=1");
                                        $pegawai_aktif = mysqli_num_rows($datapegawai);
                                        
                                        ?>
                                        <li class="col-last">
                                            <h3 class="counter text-right m-t-15"><?php echo $pegawai_aktif; ?></h3>
                                        </li>
                                        <li class="col-middle">
                                            <h4>Pegawai Aktif</h4>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-info" role="progressbar"
                                                    aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 40%">
                                                    <span class="sr-only">40% Complete (success)</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-sm-6 row-in-br">
                                    <ul class="col-in">
                                        <li>
                                            <span class="circle circle-md bg-success"><i
                                                    class=" ti-user"></i></span>
                                        </li>
                                        <?php 
                                        $datapegawai = mysqli_query($koneksi,"SELECT * FROM tb_pegawai WHERE kd_status=2");
                                        $pegawai_nonaktif = mysqli_num_rows($datapegawai);
                                        ?>
                                        <li class="col-last">
                                            <h3 class="counter text-right m-t-15"><?php echo $pegawai_nonaktif; ?></h3>
                                        </li>
                                        
                                        <li class="col-middle">
                                            <h4>Pegawai NonAktif</h4>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-success" role="progressbar"
                                                    aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 40%">
                                                    <span class="sr-only">40% Complete (success)</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-sm-6  b-0">
                                    <ul class="col-in">
                                        <li>
                                            <span class="circle circle-md bg-warning"><i
                                                    class="ti-user"></i></span>
                                        </li>
                                        <?php 
                                        $sekarang = $sekarang = date("Y-m-d");
                                        $datapegawai = mysqli_query($koneksi,"SELECT * FROM tb_absensi WHERE tgl_absensi= '$sekarang'");
                                        $absenhari = mysqli_num_rows($datapegawai);
                                        ?>
                                        <li class="col-last">
                                            <h3 class="counter text-right m-t-15"><?php echo $absenhari; ?></h3>
                                        </li>
                                        <li class="col-middle">
                                            <h4>Absen Hari ini</h4>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-warning" role="progressbar"
                                                    aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 40%">
                                                    <span class="sr-only">40% Complete (success)</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--row -->
                <!-- /.row -->
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
                <!-- ============================================================== -->
                <!-- wallet, & manage users widgets -->
                <!-- ============================================================== -->
                <!-- .row -->
                
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- Profile, & inbox widgets -->
                <!-- ============================================================== -->
                <!-- .row -->
                
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- calendar & todo list widgets -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- Blog-component -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- chats, message & profile widgets -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- start right sidebar -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- end right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2020 &copy; Ample Admin brought to you by themedesigner.in </footer>
        </div>