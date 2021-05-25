<?php
    require_once('WrapperVisitorPattern.php');
    require_once('service_locator/Service.php');
    require_once('service_locator/ServiceLocator.php');

    class Main
    {
        private static $instances;
        
        private $login;
        private $daftar_keluhan;
        private $tambah_keluhan;
        private $edit_keluhan;
        private $daftar_kritik_saran;
        private $tambah_kritik_saran;
        private $edit_kritik_saran;

        private function __construct()
        {
            $this->login = new MenuLogin();
            $this->daftar_keluhan = new MenuDaftarKeluhan();
            $this->tambah_keluhan = new MenuTambahKeluhan();
            $this->edit_keluhan = new MenuEditKeluhan();
            $this->daftar_kritik_saran = new MenuDaftarKritikSaran();
            $this->tambah_kritik_saran = new MenuTambahKritikSaran();
            $this->edit_kritik_saran = new MenuEditKritikSaran();
        }

        public static function getInstance(): Main
        {
            if (!isset(self::$instances)) {
                self::$instances = new static();
            }

            return self::$instances;
        }

        public function ShowLogin()
        {
            $this->login->accept(new VisitorMenu());
        }

        public function login_process()
        {
            if(ServiceLocator::getService("admin")->login())
            {
                header('location:./?DaftarKeluhan');
            }
            else
            {
                $_SESSION['flash'] = 'Username atau Password Salah !!!';
                $this->login->accept(new VisitorMenu());
            }
        }

        public function logout()
        {
            $this->login->accept(new VisitorMenu());
            session_destroy();
        }

        public function ShowDaftarKeluhan()
        {
            $this->Wrapper("Daftar Keluhan");            
            $this->daftar_keluhan->accept(new VisitorMenu());
        }

        public function ShowFormTambahKeluhan()
        {
            $this->Wrapper("Daftar Keluhan");
            $this->tambah_keluhan->accept(new VisitorMenu());
        }

        public function TambahKeluhan()
        {
            $this->Wrapper("Daftar Keluhan");
            $service = ServiceLocator::getService("keluhan");
            $service->Create();
            $_SESSION['flash'] = 'Data Berhasil ditambahkan';
            $this->daftar_keluhan->accept(new VisitorMenu());
        }

        public function ShowFormEditKeluhan()
        {
            $this->Wrapper("Daftar Keluhan");
            $this->edit_keluhan->accept(new VisitorMenu());
        }

        public function UpdateKeluhan()
        {
            $this->Wrapper("Daftar Keluhan");
            $service = ServiceLocator::getService("keluhan");
            $service->Update();
            $_SESSION['flash'] = 'Data Berhasil diupdate';
            $this->daftar_keluhan->accept(new VisitorMenu());
        }        

        public function UpdateStatusKeluhan()
        {
            $this->Wrapper("Daftar Keluhan");
            $service = ServiceLocator::getService("keluhan");
            $service->UpdateStatus();
            $_SESSION['flash'] = 'Data Berhasil diupdate';
            $this->daftar_keluhan->accept(new VisitorMenu());
        }

        public function HapusKeluhan()
        {
            $this->Wrapper("Daftar Keluhan");
            $service = ServiceLocator::getService("keluhan");
            $service->Delete();
            $_SESSION['flash'] = 'Data Berhasil dihapus';
            $this->daftar_keluhan->accept(new VisitorMenu());
        }     

        public function ShowDaftarKritikSaran()
        {
            $this->Wrapper("Daftar Kritik Saran");            
            $this->daftar_kritik_saran->accept(new VisitorMenu());
        }

        public function ShowFormTambahKritikSaran()
        {
            $this->Wrapper("Daftar Kritik Saran"); 
            $this->tambah_kritik_saran->accept(new VisitorMenu());
        }

        public function TambahKritikSaran()
        {
            $this->Wrapper("Daftar Kritik Saran");
            $service = ServiceLocator::getService("kritiksaran");
            $service->Create();
            $_SESSION['flash'] = 'Data Berhasil ditambahkan';
            $this->daftar_kritik_saran->accept(new VisitorMenu());
        }

        public function ShowFormEditKritikSaran()
        {
            $this->Wrapper("Daftar Kritik Saran"); 
            $this->edit_kritik_saran->accept(new VisitorMenu());
        }

        public function UpdateKritikSaran()
        {
            $this->Wrapper("Daftar Kritik Saran");
            $service = ServiceLocator::getService("kritiksaran");
            $service->Update();
            $_SESSION['flash'] = 'Data Berhasil diupdate';
            $this->daftar_kritik_saran->accept(new VisitorMenu());
        }  

        public function HapusKritikSaran()
        {
            $this->Wrapper("Daftar Kritik Saran");
            $service = ServiceLocator::getService("kritiksaran");
            $service->Delete();
            $_SESSION['flash'] = 'Data Berhasil dihapus';
            $this->daftar_kritik_saran->accept(new VisitorMenu());
        }    

        public function Wrapper($data)
        {
            $tittle = $data;
            include('views/layout/head.php');
            include('views/layout/nav.php');
        }
        
    }    