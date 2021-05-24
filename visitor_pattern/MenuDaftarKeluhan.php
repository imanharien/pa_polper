<?php
    class MenuDaftarKeluhan implements Menu
    {
        public function accept(Visitor $Visitor)
        {
            $Visitor->VisitMenuDaftarKeluhan($this);
        }
    }