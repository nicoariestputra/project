<?php
    session_start();
    // @=ben gk munculuno eror
    $jabatan    =   @$_SESSION['jabatan'];

    if ($jabatan == "admin" ) {

    }else{
        echo "Anda Tidak Memiliki Akses";
        exit();
    }