<?php
    class MenuDaftarKritikSaran implements Menu
    {
        public function accept(Visitor $Visitor)
        {
            $Visitor->VisitMenuDaftarKritikSaran($this);
        }
    }