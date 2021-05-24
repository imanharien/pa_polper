<?php

    class KritikSaran implements Service
    {
        public function getName()
        {
            return "kritiksaran";
        }

        public function Create()
        {
            global $koneksi;
            $sql = "insert kritik_saran(nama_pelanggan, `kritik_saran`) values('".$_POST['nama_pelanggan']."', '".$_POST['kritik_saran']."')";
            mysqli_query($koneksi, $sql);
            // echo "Create";
        }

        public function Read()
        {
            global $koneksi;
            $sql = "select * from kritik_saran";
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
            $sql = "select * from kritik_saran where id = '".$_GET['EditKritikSaran']."'";
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
            $sql = "update kritik_saran set nama_pelanggan='".$_POST['nama_pelanggan']."', kritik_saran='".$_POST['kritik_saran']."' where id = '".$_GET['EditKritikSaran']."'";
            $result = mysqli_query($koneksi, $sql);
            
            // echo "Update";
        }

        public function Delete()
        {
            global $koneksi;
            $sql = "delete from kritik_saran where id = '".$_GET['HapusKritikSaran']."'";
            $result = mysqli_query($koneksi, $sql);
            
            // echo "Delete";
        }
    }