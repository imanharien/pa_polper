<?php
    class MenuEditKritikSaran implements Menu
    {
        public function accept(Visitor $Visitor)
        {
            $Visitor->VisitMenuEditKritikSaran($this);
        }
    }