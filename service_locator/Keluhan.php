<?php

    class Keluhan implements Service
    {
        public function getName()
        {
            return "keluhan";
        }

        public function Create()
        {
            global $koneksi;
            $sql = "insert into keluhan(nama_pelanggan, keluhan_pelanggan, status) values('".$_POST['nama_pelanggan']."', '".$_POST['keluhan_pelanggan']."', 'PENDING')";
            mysqli_query($koneksi, $sql);
            // echo "Create";
        }

        public function Read()
        {
            global $koneksi;
            $sql = "select * from keluhan order by created_at desc";
            $result = mysqli_query($koneksi, $sql);
            $cek = mysqli_num_rows($result);
            if($cek > 0)
            {
                $rows = array();
                while($row = mysqli_fetch_assoc($result))
                {
                    $rows[] = $row;
                }
                return $rows;
            }
        }
        
        public function ReadDetail()
        {
            global $koneksi;
            $sql = "select * from keluhan where id = '".$_GET['EditKeluhan']."'";
            $result = mysqli_query($koneksi, $sql);
            $cek = mysqli_num_rows($result);
            if($cek > 0)
            {
                $rows = array();
                while($row = mysqli_fetch_assoc($result))
                {
                    $rows[] = $row;
                }
                return $rows;
            }
        }

        public function Update()
        {
            global $koneksi;
            $sql = "update keluhan set nama_pelanggan='".$_POST['nama_pelanggan']."', keluhan_pelanggan='".$_POST['keluhan_pelanggan']."' where id = '".$_GET['EditKeluhan']."'";
            mysqli_query($koneksi, $sql);
        }

        public function UpdateStatus()
        {
            global $koneksi;
            $sval = $_GET['sval'];
            if($sval=='PENDING')
            {
                $sql = "update keluhan set status='SELESAI' where id = '".$_GET['sid']."'";
            } 
            mysqli_query($koneksi, $sql);
        }

        public function Delete()
        {
            global $koneksi;
            $sql = "delete from keluhan where id = '".$_GET['HapusKeluhan']."'";
            $result = mysqli_query($koneksi, $sql);
            
            // echo "Delete";
        }
    }
