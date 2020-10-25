<?php include "./inc/koneksi.php";?>

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Form Tambah Data</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <button
                            class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i
                                class="ti-settings text-white"></i></button>
                        
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Ui Elements</a></li>
                            <li class="active">Notifications</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- .row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            
                            <form method="post" class="form-horizontal" >
                                <div class="form-group">
                                    <label class="col-md-12">NIP </label>
                                    <div class="col-md-12">
                                        <input type="text" name = "nip" class="form-control"  placeholder="NIP"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Nama </label>
                                    <div class="col-md-12">
                                        <input type="text"  name="nama" class="form-control"  placeholder="Nama"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Tempat Lahir</label>
                                    <div class="col-md-12">
                                        <input type="text" name ="tempat"class="form-control" placeholder="Tempat Lahir"> </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-md-12">Tangal Lahir</label>
                                    <div class="col-md-12">
                                        <input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir"> </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-12">Agama</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" name ="agama">
                                            <option value="">Pilih Agama</option>
                                            <?php
                                            $agama = mysqli_query($koneksi,"SELECT * FROM tb_agama");
                                            while ($a=mysqli_fetch_array($agama)){
                                                echo "<option value='$a[id_agama]'>$a[agama]</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                
                                 <div class="form-group">
                                    <label class="col-sm-12">Status</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" name ="status">
                                             <option value="">Pilih Status</option>
                                                <?php
                                                $status = mysqli_query($koneksi,"SELECT * FROM tb_status");
                                                while ($b=mysqli_fetch_array($status)){
                                                    echo "<option value='$b[id_status]'>$b[status]</option>";
                                                }
                                                ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-12">Jabatan</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" name ="jabatan">
                                             <option value="">Pilih Jabatan</option>
                                                <?php
                                                $jabatan = mysqli_query($koneksi,"SELECT * FROM tb_jabatan");
                                                while ($c=mysqli_fetch_array($jabatan)){
                                                    echo "<option value='$c[id_jabatan]'>$c[nama_jabatan]</option>";
                                                }
                                                ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12">Alamat</label>
                                    <div class="col-md-12">
                                        <textarea name="alamat" class="form-control" placeholder="Tanggal Lahir"> </textarea></div>
                                </div>
                                 <tr><td></td><td></td><td><input type="submit" name="submit" value="simpan"></td></tr> 
                            </form>
                            <?php
                            print_r(@$_POST['submit']);
                            if(@$_POST['submit']){
                            $nip = $_POST['nip'];
                            $agama = $_POST['agama'];
                            $jabatan = $_POST['jabatan'];
                            $status  = $_POST['status'];
                            $nama = $_POST['nama'];
                            $tempat = $_POST['tempat'];
                            $tgl_lahir = $_POST['tgl_lahir'];
                            $alamat   = $_POST['alamat'];
                            
                                
                            $query =  mysqli_query($koneksi, "INSERT INTO tb_pegawai (nip, 
                                                                                        kd_agama,
                                                                                        kd_jabatan,
                                                                                        kd_status,
                                                                                        nama,
                                                                                        tmpt_lahir,
                                                                                        tgl_lahir,
                                                                                        alamat) 
                                                                                        VALUES
                                                                                        ('$nip',
                                                                                        '$agama',
                                                                                        '$jabatan',
                                                                                        '$status',
                                                                                        '$nama',
                                                                                        '$tempat',
                                                                                        '$tgl_lahir',
                                                                                        '$alamat')");
                            if($query){
                               include "./content.php";
                              echo '<script>alert("Berhasil tambah data."); document.location="index.php?page=pegawai";</script>';
                            }else{
                            echo "Data gagal disimpan";
                            } 
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                
                <!-- /.row -->
                <!-- .row -->
               
                <!-- /.row -->
               
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