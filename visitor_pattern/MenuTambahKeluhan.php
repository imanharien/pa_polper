<?php
    class MenuTambahKeluhan implements Menu
    {
        public function accept(Visitor $Visitor)
        {
            $Visitor->VisitMenuTambahKeluhan($this);
        }
    }