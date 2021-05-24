<?php
    class MenuTambahKritikSaran implements Menu
    {
        public function accept(Visitor $Visitor)
        {
            $Visitor->VisitMenuTambahKritikSaran($this);
        }
    }