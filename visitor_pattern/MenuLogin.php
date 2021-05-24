<?php
    class MenuLogin implements Menu
    {
        public function accept(Visitor $Visitor)
        {
            $Visitor->VisitMenuLogin($this);
        }
    }