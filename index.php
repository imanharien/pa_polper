<?php
    require_once("visitor_pattern/Main.php");
    session_start();
    $index = Main::getInstance();

    if(isset($_POST['login']))
    {
        $index->login_process();
    }
    else if(isset($_GET['Logout']))
    {
        $index->logout();
    }
    else if(isset($_GET['DaftarKeluhan']))
    {
        $index->ShowDaftarKeluhan();
    } 
    else if(isset($_POST['tambah_keluhan']))
    {
        $index->TambahKeluhan();
    }
    else if(isset($_POST['update_keluhan']))
    {
        $index->UpdateKeluhan();
    }
    else if(isset($_POST['tambah_kritik_saran']))
    {
        $index->TambahKritikSaran();
    }
    else if(isset($_POST['update_kritik_saran']))
    {
        $index->UpdateKritikSaran();
    }
    else if (isset($_GET['TambahKeluhan']))
    {
        $index->ShowFormTambahKeluhan();
    }
    else if (isset($_GET['EditKeluhan']))
    {
        $index->ShowFormEditKeluhan();
    } 
    else if (isset($_GET['UpdateStatusKeluhan']))
    {
        $index->UpdateStatusKeluhan();
    }
    else if (isset($_GET['HapusKeluhan']))
    {
        $index->HapusKeluhan();
    } 
    else if (isset($_GET['DaftarKritikSaran']))
    {
        $index->ShowDaftarKritikSaran();
    } 
    else if (isset($_GET['TambahKritikSaran']))
    {
        $index->ShowFormTambahKritikSaran();
    } 
    else if (isset($_GET['EditKritikSaran']))
    {
        $index->ShowFormEditKritikSaran();
    } 
    else if (isset($_GET['HapusKritikSaran']))
    {
        $index->HapusKritikSaran();
    } 
    else 
    {
        $index->ShowLogin();
    }