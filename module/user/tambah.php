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
                                    <label class="col-md-12">Username </label>
                                    <div class="col-md-12">
                                        <input type="text" name = "user" class="form-control"  placeholder="Username"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Password </label>
                                    <div class="col-md-12">
                                        <input type="text" name = "pass" class="form-control"  placeholder="Password"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Level</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" name ="level">
                                             <option value="">Pilih Jabatan</option>
                                             <option value="Direktur">Direktur</option>  
                                             <option value="Manager">Manager</option>  
                                             <option value="Staff">Staff</option> 
                                             <option value="Karyawan">Karyawan</option>    
                                        </select>
                                    </div>
                                </div>

                                 <tr><td></td><td></td><td><input type="submit" name="submit" value="simpan"></td></tr> 
                            </form>
                            <?php
                            if(@$_POST['submit']){
                            $user = $_POST['user'];
                            $pass =  sha1($_POST['pass']);
                            $level = $_REQUEST['level'];
                            
                                $query =  mysqli_query($koneksi, "INSERT INTO tb_user (username,
                                                                                        password,
                                                                                        level) 
                                                                                        VALUES
                                                                                        ('$user',
                                                                                        '$pass',
                                                                                        '$level'
                                                                                              )");
                            
                            if($query){
                              echo '<script>alert("Berhasil tambah data."); document.location="index.php?page=user";</script>';
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