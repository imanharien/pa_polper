<?php
    require_once('Visitor.php');

    class VisitorMenu implements Visitor 
    {
        public function VisitMenuLogin(MenuLogin $menu_login)
        {
            include('views/login.php');
        }

        public function VisitMenuDaftarKeluhan(MenuDaftarKeluhan $menu_daftar_keluhan)
        {
            $service = ServiceLocator::getService("keluhan");
            $keluhan = $service->Read();
            include('views/daftar_keluhan.php');
        }

        public function VisitMenuTambahKeluhan(MenuTambahKeluhan $menu_tambah_keluhan)
        {            
            include('views/tambah_keluhan.php');
        }

        public function VisitMenuEditKeluhan(MenuEditKeluhan $menu_edit_keluhan)
        {
            $service = ServiceLocator::getService("keluhan");
            $keluhan = $service->ReadDetail();
            foreach($keluhan as $row)
            {
                $nama_pelanggan = $row['nama_pelanggan'];
                $tanggal = $row['tanggal'];
                $keluhan_pelanggan = $row['keluhan_pelanggan'];
            }
            include('views/edit_keluhan.php');
        }

        public function VisitMenuDaftarKritikSaran(MenuDaftarKritikSaran $menu_daftar_kritik_saran)
        {
            $service = ServiceLocator::getService("kritiksaran");
            $kritik_saran = $service->Read();
            include('views/daftar_kritik_saran.php');
        }

        public function VisitMenuTambahKritikSaran(MenuTambahKritikSaran $menu_tambah_kritik_saran)
        {
            include('views/tambah_kritik_saran.php');
        }

        public function VisitMenuEditKritikSaran(MenuEditKritikSaran $menu_edit_kritik_saran)
        {
            $service = ServiceLocator::getService("kritiksaran");
            $KritikSaran = $service->ReadDetail();
            foreach($KritikSaran as $row)
            {
                $nama_pelanggan = $row['nama_pelanggan'];
                $tanggal = $row['tanggal'];
                $kritik_saran = $row['kritik_saran'];
            }
            include('views/edit_kritik_saran.php');
        }
    }