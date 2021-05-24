<?php

    interface Visitor
    {
        public function VisitMenuLogin(MenuLogin $menu_login);
        public function VisitMenuDaftarKeluhan(MenuDaftarKeluhan $menu_daftar_keluhan);
        public function VisitMenuTambahKeluhan(MenuTambahKeluhan $menu_tambah_keluhan);
        public function VisitMenuEditKeluhan(MenuEditKeluhan $menu_edit_keluhan);
        public function VisitMenuDaftarKritikSaran(MenuDaftarKritikSaran $menu_daftar_kritik_saran);
        public function VisitMenuTambahKritikSaran(MenuTambahKritikSaran $menu_tambah_kritik_saran);
        public function VisitMenuEditKritikSaran(MenuEditKritikSaran $menu_edit_kritik_saran);
    }