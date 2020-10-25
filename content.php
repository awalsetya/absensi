<?php 
if (@$_GET['page']=='home') {
    include "module/home/home.php";
}elseif (@$_GET['page']=='pegawai') {
    $act=@$_GET['act'];
    switch ($act) {
        case 'tambah':
            include "module/pegawai/tambah.php";
            break;
        case 'ubah':
            include "module/pegawai/ubah.php";
            break;
        
        default:
            include "module/pegawai/tampil.php";
            break;
    }
}elseif (@$_GET['page']=='user') {
    $act=@$_GET['act'];
    switch ($act) {
        case 'tambah':
            include "module/user/tambah.php";
            break;
        case 'ubah':
            include "module/user/ubah.php";
            break;
        
        default:
            include "module/user/tampil.php";
            break;
    }
}elseif (@$_GET['page']=='agama') {
    $act=@$_GET['act'];
    switch ($act) {
        case 'tambah':
            include "module/agama/tambah.php";
            break;
        case 'ubah':
            include "module/agama/ubah.php";
            break;

         case 'hapus':
            include "module/agama/hapus.php";
            break;
        
        default:
            include "module/agama/tampil.php";
            break;
    }
}elseif (@$_GET['page']=='jabatan') {
    $act=@$_GET['act'];
    switch ($act) {
        case 'tambah':
            include "module/jabatan/tambah.php";
            break;
        case 'ubah':
            include "module/jabatan/ubah.php";
            break;
        
        default:
            include "module/jabatan/tampil.php";
            break;
    }
}elseif (@$_GET['page']=='absen') {
    $act=@$_GET['act'];
    switch ($act) {
        case 'tambah':
            include "module/jabatan/tambah.php";
            break;
        case 'ubah':
            include "module/jabatan/ubah.php";
            break;
        
        default:
            include "module/absensi/tampil.php";
            break;
    }
}

?>



