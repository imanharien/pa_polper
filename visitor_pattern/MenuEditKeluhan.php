<?php
    class MenuEditKeluhan implements Menu
    {
        public function accept(Visitor $Visitor)
        {
            $Visitor->VisitMenuEditKeluhan($this);
        }
    }