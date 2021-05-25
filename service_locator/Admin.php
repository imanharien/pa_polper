<?php

    class Admin implements Service
    {
        public function getName()
        {
            return "admin";
        }
        
        public function login()
        {
            global $koneksi;
            $sql = "select * from admin where username = '".$_POST['username']."'";
            $result = mysqli_query($koneksi, $sql);
            $cek = mysqli_num_rows($result);
            if($cek > 0)
            {
                $rows = array();
                while($row = mysqli_fetch_assoc($result))
                {
                    if (password_verify($_POST['password'],  $row["password"]))
                    {
                        
                        $_SESSION['id_admin'] = $row["id"];
                        $_SESSION['nama_admin'] = $row["nama"];
                        return TRUE;
                    }
                }
                return FALSE;
            }
        }
    }
